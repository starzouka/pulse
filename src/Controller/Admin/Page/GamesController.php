<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Category;
use App\Entity\Game;
use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Service\Admin\TableExportService;
use App\Service\Media\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'name', 'category', 'publisher', 'created_at'];

    #[Route('/admin/games', name: 'admin_games', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        GameRepository $gameRepository,
        CategoryRepository $categoryRepository,
        ImageUploader $imageUploader,
        EntityManagerInterface $entityManager
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
                ->setPublisher($publisher !== '' ? $publisher : null);

            if ($gameId <= 0) {
                $game->setCreatedAt(new \DateTime());
                $entityManager->persist($game);
            }

            if ($uploadedCover !== null) {
                if (!$imageUploader->isValidImageUpload($uploadedCover)) {
                    $this->addFlash('error', 'Image cover invalide. Formats acceptes: jpg, png, webp, gif.');

                    return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
                }

                $connectedUser = $this->getUser();
                if (!$connectedUser instanceof User) {
                    $this->addFlash('error', 'Session invalide pour uploader une image.');

                    return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
                }

                $coverImage = $imageUploader->uploadImage(
                    $uploadedCover,
                    $connectedUser,
                    'admin/games',
                    'game_cover',
                    'Cover jeu ' . $name,
                );
                $entityManager->persist($coverImage);
                $game->setCoverImageId($coverImage);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', $gameId > 0 ? 'Jeu mis a jour.' : 'Jeu cree.');

                return $this->redirectToRoute('admin_games');
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (nom deja utilise ou liaison invalide).');

                return $this->redirectToRoute('admin_games', $gameId > 0 ? ['edit' => $gameId] : []);
            }
        }

        $categoryFilter = $request->query->getInt('category_id', 0);
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'category_id' => $categoryFilter > 0 ? $categoryFilter : '',
            'publisher' => trim((string) $request->query->get('publisher', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $games = $gameRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['category_id']) ? $filters['category_id'] : null,
            $filters['publisher'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        return $this->render('admin/pages/games.html.twig', [
            'games' => $games,
            'editingGame' => $editingGame,
            'categories' => $categoryRepository->findBy([], ['name' => 'ASC'], 500),
            'filters' => $filters,
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
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $games = $gameRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['category_id']) ? $filters['category_id'] : null,
            $filters['publisher'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $headers = ['ID', 'Nom', 'Categorie', 'Publisher', 'Cover', 'Cree le'];
        $rows = [];
        foreach ($games as $game) {
            $rows[] = [
                (int) ($game->getGameId() ?? 0),
                (string) ($game->getName() ?? '-'),
                (string) ($game->getCategoryId()?->getName() ?? '-'),
                (string) ($game->getPublisher() ?? '-'),
                (string) ($game->getCoverImageId()?->getFileUrl() ?? '-'),
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
}
