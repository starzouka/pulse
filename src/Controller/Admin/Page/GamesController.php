<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Category;
use App\Entity\Game;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Service\Game\GamePopularityService;
use App\Service\Ai\GameAiAssistant;
use App\Service\Ai\GameAiAutoFillAssistant;
use App\Service\Admin\TableExportService;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\DBAL\Exception\NotNullConstraintViolationException;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'name', 'category', 'publisher', 'status', 'views', 'favorites', 'popularity', 'created_at'];

    #[Route('/admin/games', name: 'admin_games', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        GameRepository $gameRepository,
        CategoryRepository $categoryRepository,
        GamePopularityService $gamePopularityService,
        PaginatorInterface $paginator,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger,
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingGame = $editId > 0 ? $gameRepository->findOneWithRelationsById($editId) : null;
        if ($editId > 0 && !$editingGame instanceof Game) {
            $this->addFlash('error', 'Jeu introuvable pour edition.');

            return $this->redirectToRoute('admin_games');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_game_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_games');
            }

            $gameId = $request->request->getInt('game_id', 0);
            $game = $gameId > 0 ? $gameRepository->find($gameId) : new Game();
            if (!$game instanceof Game) {
                $this->addFlash('error', 'Jeu introuvable.');

                return $this->redirectToRoute('admin_games');
            }

            $name = trim((string) $request->request->get('name', ''));
            $description = trim((string) $request->request->get('description', ''));
            $publisher = trim((string) $request->request->get('publisher', ''));
            $status = strtoupper(trim((string) $request->request->get('status', Game::STATUS_DRAFT)));
            $categoryId = $request->request->getInt('category_id', 0);
            $uploadedCover = $request->files->get('cover_file');

            if ($name === '') {
                $this->addFlash('error', 'Le nom du jeu est obligatoire.');

                return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
            }

            $category = $categoryRepository->find($categoryId);
            if (!$category instanceof Category) {
                $this->addFlash('error', 'Categorie invalide.');

                return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
            }

            $game
                ->setName($name)
                ->setCategoryId($category)
                ->setDescription($description !== '' ? $description : null)
                ->setPublisher($publisher !== '' ? $publisher : null)
                ->setStatus($status);

            $possibleDuplicates = $gameRepository->findSimilarByName($name, 3);
            foreach ($possibleDuplicates as $possibleDuplicate) {
                if ($possibleDuplicate->getGameId() !== $game->getGameId()) {
                    $this->addFlash('warning', 'Attention: un jeu au nom similaire existe deja (#' . $possibleDuplicate->getGameId() . ').');
                    break;
                }
            }

            if ($gameId <= 0) {
                $game->setCreatedAt(new \DateTime());
                $entityManager->persist($game);
            }

            if ($uploadedCover instanceof UploadedFile) {
                if (!in_array($uploadedCover->getMimeType(), ['image/jpeg', 'image/png', 'image/webp', 'image/gif'], true)) {
                    $this->addFlash('error', 'Image cover invalide. Formats acceptes: jpg, png, webp, gif.');

                    return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
                }
                try {
                    $storedCoverName = $this->storeCoverFile($uploadedCover);
                    $game
                        ->setCoverName($storedCoverName)
                        ->setUpdatedAt(new \DateTime());
                } catch (\Throwable $exception) {
                    $this->addFlash('error', 'Upload cover impossible: ' . $exception->getMessage());

                    return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
                }
            }

            try {
                $entityManager->flush();
                $this->enforceCanonicalSlug($game);
                $gamePopularityService->recompute($game);
                $entityManager->flush();
                $this->addFlash('success', $gameId > 0 ? 'Jeu mis a jour.' : 'Jeu cree.');

                return $this->redirectToRoute('admin_games');
            } catch (\Throwable $exception) {
                if ($exception instanceof UniqueConstraintViolationException) {
                    $this->addFlash('error', 'Enregistrement impossible: nom deja utilise.');
                } elseif ($exception instanceof ForeignKeyConstraintViolationException || $exception instanceof NotNullConstraintViolationException) {
                    $this->addFlash('error', 'Enregistrement impossible: donnees relationnelles invalides.');
                } else {
                    $message = 'Enregistrement impossible.';
                    if ($this->getParameter('kernel.environment') === 'dev') {
                        $message .= ' Detail: ' . $exception->getMessage();
                    }
                    $this->addFlash('error', $message);
                }

                $logger->error('Echec de sauvegarde game', [
                    'name' => $name,
                    'category_id' => $categoryId,
                    'status' => $status,
                    'exception' => $exception::class,
                    'error' => $exception->getMessage(),
                ]);

                return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
            }
        }

        $categoryFilter = $request->query->getInt('category_id', 0);
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'category_id' => $categoryFilter > 0 ? $categoryFilter : '',
            'publisher' => trim((string) $request->query->get('publisher', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];
        if (!in_array($filters['status'], ['', ...Game::ALLOWED_STATUSES], true)) {
            $filters['status'] = '';
        }

        $games = $gameRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['category_id']) ? $filters['category_id'] : null,
            $filters['publisher'],
            $filters['status'] !== '' ? $filters['status'] : null,
            $filters['sort'],
            $filters['direction'],
            500
        );
        $gamesPagination = $paginator->paginate(
            $games,
            max(1, $request->query->getInt('page', 1)),
            12
        );

        return $this->render('admin/pages/games.html.twig', [
            'games' => $gamesPagination->getItems(),
            'games_pagination' => $gamesPagination,
            'editingGame' => $editingGame,
            'categories' => $categoryRepository->findBy([], ['name' => 'ASC'], 500),
            'filters' => $filters,
            'allowed_statuses' => Game::ALLOWED_STATUSES,
        ]);
    }

    #[Route('/admin/games/{id}/delete', name: 'admin_game_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        GameRepository $gameRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_game_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_games');
        }

        $game = $gameRepository->find($id);
        if (!$game instanceof Game) {
            $this->addFlash('error', 'Jeu introuvable.');

            return $this->redirectToRoute('admin_games');
        }

        try {
            $entityManager->remove($game);
            $entityManager->flush();
            $this->addFlash('success', 'Jeu supprime.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (jeu lie a des tournois/demandes).');
        }

        return $this->redirectToRoute('admin_games');
    }

    #[Route('/admin/games/export/{format}', name: 'admin_games_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        GameRepository $gameRepository,
        TableExportService $tableExportService
    ): Response {
        $categoryId = $request->query->getInt('category_id', 0);
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'category_id' => $categoryId > 0 ? $categoryId : '',
            'publisher' => trim((string) $request->query->get('publisher', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];
        if (!in_array($filters['status'], ['', ...Game::ALLOWED_STATUSES], true)) {
            $filters['status'] = '';
        }

        $games = $gameRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['category_id']) ? $filters['category_id'] : null,
            $filters['publisher'],
            $filters['status'] !== '' ? $filters['status'] : null,
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $headers = ['ID', 'Nom', 'Categorie', 'Publisher', 'Status', 'Vues', 'Favoris', 'Popularite', 'Cover', 'Cree le'];
        $rows = [];
        foreach ($games as $game) {
            $rows[] = [
                (int) ($game->getGameId() ?? 0),
                (string) ($game->getName() ?? '-'),
                (string) ($game->getCategoryId()?->getName() ?? '-'),
                (string) ($game->getPublisher() ?? '-'),
                $game->getStatus(),
                $game->getViewsCount(),
                $game->getFavoritesCount(),
                $game->getPopularityScore(),
                (string) ($game->getCoverPublicPath() ?? $game->getCoverImageId()?->getFileUrl() ?? '-'),
                $game->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Jeux', $headers, $rows, sprintf('admin_games_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Jeux', $headers, $rows, sprintf('admin_games_%s.pdf', $fileSuffix));
    }

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'created_at';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }

    #[Route('/admin/games/ai-suggest', name: 'admin_games_ai_suggest', methods: ['POST'])]
    public function aiSuggest(
        Request $request,
        CategoryRepository $categoryRepository,
        GameAiAssistant $gameAiAssistant
    ): JsonResponse {
        if (!$this->isCsrfTokenValid('admin_game_ai', (string) $request->request->get('_token'))) {
            return $this->json(['error' => 'Jeton CSRF invalide.'], Response::HTTP_FORBIDDEN);
        }

        $name = trim((string) $request->request->get('name', ''));
        if ($name === '') {
            return $this->json(['error' => 'Le nom du jeu est obligatoire.'], Response::HTTP_BAD_REQUEST);
        }

        $suggestion = $gameAiAssistant->suggest(
            $name,
            trim((string) $request->request->get('publisher', '')),
            trim((string) $request->request->get('description', '')),
            $categoryRepository->findBy([], ['name' => 'ASC'], 500)
        );

        return $this->json($suggestion);
    }

    #[Route('/admin/games/ai-autofill', name: 'admin_games_ai_autofill', methods: ['POST'])]
    public function aiAutofill(
        Request $request,
        CategoryRepository $categoryRepository,
        GameAiAutoFillAssistant $gameAiAutoFillAssistant
    ): JsonResponse {
        if (!$this->isCsrfTokenValid('admin_game_ai_autofill', (string) $request->request->get('_token'))) {
            return $this->json(['error' => 'Jeton CSRF invalide.'], Response::HTTP_FORBIDDEN);
        }

        $brief = trim((string) $request->request->get('brief', ''));
        $currentName = trim((string) $request->request->get('name', ''));
        $currentPublisher = trim((string) $request->request->get('publisher', ''));

        if ($brief === '' && $currentName === '') {
            return $this->json(['error' => 'Ajoute un brief IA ou un nom de jeu.'], Response::HTTP_BAD_REQUEST);
        }

        $payload = $gameAiAutoFillAssistant->fillForm(
            $brief,
            $categoryRepository->findBy([], ['name' => 'ASC'], 500),
            $currentName,
            $currentPublisher
        );

        return $this->json($payload);
    }

    private function storeCoverFile(UploadedFile $uploadedFile): string
    {
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/games';
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0775, true) && !is_dir($uploadDir)) {
            throw new \RuntimeException('Creation du dossier uploads/games impossible.');
        }

        $extension = $uploadedFile->guessExtension();
        if (!is_string($extension) || $extension === '') {
            $extension = $uploadedFile->getClientOriginalExtension();
        }
        if (!is_string($extension) || $extension === '') {
            $extension = 'bin';
        }

        $fileName = 'game_cover_' . bin2hex(random_bytes(8)) . '.' . strtolower($extension);
        $uploadedFile->move($uploadDir, $fileName);

        return $fileName;
    }

    private function enforceCanonicalSlug(Game $game): void
    {
        $gameId = $game->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return;
        }

        $base = mb_strtolower(trim((string) $game->getName()));
        $base = preg_replace('/[^\p{L}\p{N}]+/u', '-', $base);
        $base = trim((string) $base, '-');
        if ($base === '') {
            $base = 'game';
        }

        $canonicalSlug = $base . '-' . $gameId;
        if ($game->getSlug() !== $canonicalSlug) {
            $game->setSlug($canonicalSlug);
        }
    }
}
