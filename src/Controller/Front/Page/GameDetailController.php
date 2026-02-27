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
use App\Service\Game\GamePopularityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameDetailController extends AbstractController
{
    /** @var list<string> */
    private const FRONT_VISIBLE_STATUSES = [
        Game::STATUS_DRAFT,
        Game::STATUS_PENDING,
        Game::STATUS_PUBLISHED,
    ];

    #[Route('/pages/game-detail/{slug}', name: 'front_game_detail', defaults: ['slug' => null], methods: ['GET'])]
    public function index(
        ?string $slug,
        Request $request,
        GameRepository $gameRepository,
        GameFavoriteRepository $gameFavoriteRepository,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        EntityManagerInterface $entityManager,
        GamePopularityService $gamePopularityService,
    ): Response {
        $identifier = $slug !== null ? trim($slug) : null;
        $queryId = $request->query->getInt('id', 0);
        if (($identifier === null || $identifier === '') && $queryId > 0) {
            $identifier = (string) $queryId;
        }

        $game = $this->resolveGame($identifier, $gameRepository);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }
        if (!in_array($game->getStatus(), self::FRONT_VISIBLE_STATUSES, true)) {
            throw $this->createNotFoundException('Jeu indisponible.');
        }

        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;
        $isFavorited = $viewerUser instanceof User
            ? $gameFavoriteRepository->existsForUserAndGame($viewerUser, $game)
            : false;

        if ($this->registerGameView($request, $game)) {
            $gamePopularityService->recompute($game);
            $entityManager->flush();
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
            'tournaments_by_status' => $groupedTournaments,
            'active_tab' => $activeTab,
            'stats' => [
                'total_tournaments' => $totalTournamentsCount,
                'active_tournaments' => $activeTournamentsCount,
                'participants' => $totalParticipantsCount,
            ],
            'filters' => [
                'tq' => $tournamentQuery,
                'status' => $status,
                'format' => $format,
                'sort' => $sort,
            ],
            'is_favorited' => $isFavorited,
        ]);
    }

    #[Route('/pages/game-detail/{slug}/favorite', name: 'front_game_favorite_toggle', methods: ['POST'])]
    public function toggleFavorite(
        string $slug,
        Request $request,
        GameRepository $gameRepository,
        GameFavoriteRepository $gameFavoriteRepository,
        GamePopularityService $gamePopularityService,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            $this->addFlash('error', 'Connexion requise pour ajouter un favori.');

            return $this->redirectToRoute('front_login');
        }

        $game = $this->resolveGame($slug, $gameRepository);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }

        if (!$this->isCsrfTokenValid('favorite_game_' . $game->getGameId(), (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSeoIdentifier()]);
        }

        $existingFavorite = $gameFavoriteRepository->findOneByUserAndGame($viewer, $game);
        if ($existingFavorite instanceof GameFavorite) {
            $entityManager->remove($existingFavorite);
            $this->addFlash('success', 'Jeu retire des favoris.');
        } else {
            $favorite = (new GameFavorite())
                ->setUserId($viewer)
                ->setGameId($game)
                ->setCreatedAt(new \DateTime());
            $entityManager->persist($favorite);
            $this->addFlash('success', 'Jeu ajoute aux favoris.');
        }

        $entityManager->flush();
        $gamePopularityService->recompute($game);
        $entityManager->flush();

        return $this->redirectToRoute('front_game_detail', ['slug' => $game->getSeoIdentifier()]);
    }

    private function resolveGame(?string $identifier, GameRepository $gameRepository): ?Game
    {
        $normalizedIdentifier = trim((string) $identifier);
        if ($normalizedIdentifier !== '') {
            if (preg_match('/-(\d+)$/', $normalizedIdentifier, $matches) === 1) {
                $bySuffixId = $gameRepository->findOneWithRelationsById((int) $matches[1]);
                if ($bySuffixId instanceof Game) {
                    return $bySuffixId;
                }
            }

            if (ctype_digit($normalizedIdentifier)) {
                $byId = $gameRepository->findOneWithRelationsById((int) $normalizedIdentifier);
                if ($byId instanceof Game) {
                    return $byId;
                }
            }

            $bySlug = $gameRepository->findOneWithRelationsBySlug($normalizedIdentifier);
            if ($bySlug instanceof Game) {
                return $bySlug;
            }

            if (preg_match('/^(.*)-\d+$/', $normalizedIdentifier, $matches) === 1) {
                $withoutNumericSuffix = trim((string) ($matches[1] ?? ''));
                if ($withoutNumericSuffix !== '') {
                    $byBaseSlug = $gameRepository->findOneWithRelationsBySlugLoose($withoutNumericSuffix);
                    if ($byBaseSlug instanceof Game) {
                        return $byBaseSlug;
                    }
                }
            }

            return $gameRepository->findOneWithRelationsBySlugLoose($normalizedIdentifier);
        }

        $latestGames = $gameRepository->searchCatalog(
            query: null,
            categoryId: null,
            publisher: null,
            withActiveTournamentsOnly: false,
            sort: 'latest',
            limit: 1,
            statuses: self::FRONT_VISIBLE_STATUSES
        );

        return $latestGames[0] ?? null;
    }

    private function registerGameView(Request $request, Game $game): bool
    {
        if (!$request->hasSession()) {
            $game->incrementViewsCount();

            return true;
        }

        $session = $request->getSession();
        $gameId = $game->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return false;
        }

        $sessionKey = sprintf('game_viewed_%d', $gameId);
        if ($session->get($sessionKey, false) === true) {
            return false;
        }

        $session->set($sessionKey, true);
        $game->incrementViewsCount();

        return true;
    }
}
