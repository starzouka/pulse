<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Game;
use App\Entity\GameFavorite;
use App\Entity\User;
use App\Repository\GameFavoriteRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Catalog\GamePopularityService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameDetailController extends AbstractController
{
    #[Route('/pages/game-detail/{slug}', name: 'front_game_detail', requirements: ['slug' => '[a-z0-9]+(?:-[a-z0-9]+)*-[0-9]+'], defaults: ['slug' => null], methods: ['GET'])]
    public function index(
        ?string $slug,
        Request $request,
        GameRepository $gameRepository,
        GameFavoriteRepository $gameFavoriteRepository,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        GamePopularityService $gamePopularityService,
        EntityManagerInterface $entityManager,
    ): Response {
        $game = $this->resolveGame($slug, $gameRepository);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }

        if ($slug !== null && $slug !== '' && $game->getSlug() !== $slug) {
            return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSlug()]);
        }

        $this->trackViewOncePerSession($request, $game, $entityManager, $gamePopularityService);

        $viewer = $this->getUser();
        $isFavorite = false;
        if ($viewer instanceof User) {
            $isFavorite = $gameFavoriteRepository->existsForUserAndGame($viewer, $game);
        }

        $tournamentQuery = trim((string) $request->query->get('tq', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        if (!in_array($status, ['', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED', 'DRAFT'], true)) {
            $status = '';
        }

        $format = strtoupper(trim((string) $request->query->get('format', '')));
        if (!in_array($format, ['', 'BO1', 'BO3', 'BO5'], true)) {
            $format = '';
        }

        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'prize', 'progress'], true)) {
            $sort = 'latest';
        }

        $activeTab = strtolower(trim((string) $request->query->get('tab', 'open')));
        if (!in_array($activeTab, ['open', 'ongoing', 'finished'], true)) {
            $activeTab = 'open';
        }

        $tournaments = $tournamentRepository->searchCatalog(
            $tournamentQuery !== '' ? $tournamentQuery : null,
            $game->getGameId(),
            null,
            $status !== '' ? $status : null,
            $format !== '' ? $format : null,
            null,
            null,
            null,
            null,
            null,
            $sort,
            250
        );

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if ($tournamentId !== null) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $participantsCountByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);
        $totalMatchesByTournamentId = $tournamentMatchRepository->countByTournamentIds($tournamentIds);
        $finishedMatchesByTournamentId = $tournamentMatchRepository->countFinishedByTournamentIds($tournamentIds);

        $groupedTournaments = [
            'open' => [],
            'ongoing' => [],
            'finished' => [],
        ];

        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId() ?? 0;
            $totalMatches = $totalMatchesByTournamentId[$tournamentId] ?? 0;
            $finishedMatches = $finishedMatchesByTournamentId[$tournamentId] ?? 0;
            $progressPercent = $totalMatches > 0
                ? (int) round(($finishedMatches / $totalMatches) * 100)
                : 0;

            $statusKey = strtolower((string) $tournament->getStatus());
            if (!isset($groupedTournaments[$statusKey])) {
                if ($statusKey === 'cancelled' || $statusKey === 'draft') {
                    continue;
                }
                $statusKey = 'open';
            }

            $groupedTournaments[$statusKey][] = [
                'tournament' => $tournament,
                'participants_count' => $participantsCountByTournamentId[$tournamentId] ?? 0,
                'total_matches' => $totalMatches,
                'finished_matches' => $finishedMatches,
                'progress_percent' => max(0, min(100, $progressPercent)),
            ];
        }

        $totalTournamentsCount = count($tournaments);
        $activeTournamentsCount = count($groupedTournaments['open']) + count($groupedTournaments['ongoing']);
        $totalParticipantsCount = 0;
        foreach ($participantsCountByTournamentId as $participantsCount) {
            $totalParticipantsCount += (int) $participantsCount;
        }

        return $this->render('front/pages/game-detail.html.twig', [
            'game' => $game,
            'is_favorite' => $isFavorite,
            'tournaments_by_status' => $groupedTournaments,
            'active_tab' => $activeTab,
            'stats' => [
                'total_tournaments' => $totalTournamentsCount,
                'active_tournaments' => $activeTournamentsCount,
                'participants' => $totalParticipantsCount,
                'views' => $game->getViewsCount(),
                'favorites' => $game->getFavoritesCount(),
                'score' => $game->getPopularityScore(),
            ],
            'filters' => [
                'tq' => $tournamentQuery,
                'status' => $status,
                'format' => $format,
                'sort' => $sort,
            ],
        ]);
    }

    #[Route('/pages/game-detail/{id}', name: 'front_game_detail_legacy', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function legacyById(int $id, GameRepository $gameRepository): RedirectResponse
    {
        $game = $gameRepository->findOneWithRelationsById($id);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }

        return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSlug()]);
    }

    #[Route('/pages/game-detail/{slug}/favorite-toggle', name: 'front_game_detail_favorite_toggle', requirements: ['slug' => '[a-z0-9]+(?:-[a-z0-9]+)*-[0-9]+'], methods: ['POST'])]
    public function toggleFavorite(
        string $slug,
        Request $request,
        GameRepository $gameRepository,
        GameFavoriteRepository $gameFavoriteRepository,
        EntityManagerInterface $entityManager,
        GamePopularityService $gamePopularityService,
    ): RedirectResponse {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->headers->get('referer') ?: $this->generateUrl('front_game_detail', ['slug' => $slug]),
            ]);
        }

        $game = $gameRepository->findOneWithRelationsBySlug($slug);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }

        $gameId = (int) ($game->getGameId() ?? 0);
        if (!$this->isCsrfTokenValid('toggle_game_favorite_' . $gameId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSlug()]);
        }

        $existingFavorite = $gameFavoriteRepository->findOneByUserAndGame($viewer, $game);
        if ($existingFavorite instanceof GameFavorite) {
            $entityManager->remove($existingFavorite);
            $game->decrementFavoritesCount();
            $this->addFlash('success', 'Jeu retire des favoris.');
        } else {
            $entityManager->persist(
                (new GameFavorite())
                    ->setUserId($viewer)
                    ->setGameId($game)
                    ->setCreatedAt(new \DateTime())
            );
            $game->incrementFavoritesCount();
            $this->addFlash('success', 'Jeu ajoute aux favoris.');
        }

        $entityManager->flush();
        $gamePopularityService->refreshAndFlushSingleGame($game);

        return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSlug()]);
    }

    private function resolveGame(?string $slug, GameRepository $gameRepository): ?Game
    {
        $slugValue = trim((string) $slug);
        if ($slugValue !== '') {
            return $gameRepository->findOneWithRelationsBySlug($slugValue);
        }

        $latestGames = $gameRepository->searchCatalog(
            query: null,
            categoryId: null,
            publisher: null,
            withActiveTournamentsOnly: false,
            sort: 'latest',
            limit: 1
        );

        return $latestGames[0] ?? null;
    }

    private function trackViewOncePerSession(
        Request $request,
        Game $game,
        EntityManagerInterface $entityManager,
        GamePopularityService $gamePopularityService,
    ): void {
        $gameId = $game->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return;
        }

        $session = $request->hasSession() ? $request->getSession() : null;
        if ($session === null) {
            return;
        }

        $viewedGameIds = $session->get('front_game_detail_viewed_ids', []);
        if (!is_array($viewedGameIds)) {
            $viewedGameIds = [];
        }

        if (in_array($gameId, $viewedGameIds, true)) {
            return;
        }

        $viewedGameIds[] = $gameId;
        $session->set('front_game_detail_viewed_ids', array_values(array_unique($viewedGameIds)));

        $game->incrementViewsCount();
        $entityManager->flush();
        $gamePopularityService->refreshAndFlushSingleGame($game);
    }
}
