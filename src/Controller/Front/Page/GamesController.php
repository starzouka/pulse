<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
use App\Service\Catalog\GamePopularityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    use PaginatesCollectionsTrait;

    #[Route('/pages/games', name: 'front_games', methods: ['GET'])]
    public function index(
        Request $request,
        GameRepository $gameRepository,
        CategoryRepository $categoryRepository,
        TournamentRepository $tournamentRepository,
        GamePopularityService $gamePopularityService,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $categoryId = $this->toPositiveInt($request->query->get('category'));
        $publisher = trim((string) $request->query->get('publisher', ''));
        $activeOnly = $request->query->getBoolean('active');

        $sort = strtolower(trim((string) $request->query->get('sort', 'name')));
        if (!in_array($sort, ['name', 'latest', 'publisher', 'category', 'popular'], true)) {
            $sort = 'name';
        }

        $games = $gameRepository->searchCatalog(
            $query !== '' ? $query : null,
            $categoryId,
            $publisher !== '' ? $publisher : null,
            $activeOnly,
            $sort,
            180,
        );

        if ($games !== []) {
            $gamePopularityService->refreshScoresForGames($games, true);
        }

        $gameIds = [];
        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if ($gameId !== null) {
                $gameIds[] = $gameId;
            }
        }

        $totalTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);

        $pagination = $this->paginateItems($games, $this->readPage($request), 12);
        $games = $pagination['items'];

        $gameIds = [];
        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if ($gameId !== null) {
                $gameIds[] = $gameId;
            }
        }

        $totalTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);

        $trendingGames = $gameRepository->findTrending(6);
        if ($trendingGames !== []) {
            $gamePopularityService->refreshScoresForGames($trendingGames, true);
        }

        $trendingIds = [];
        foreach ($trendingGames as $trendingGame) {
            $trendingId = $trendingGame->getGameId();
            if ($trendingId !== null) {
                $trendingIds[] = $trendingId;
            }
        }

        $trendingActiveTournamentsByGameId = $tournamentRepository->countByGameIds($trendingIds, ['OPEN', 'ONGOING']);

        return $this->render('front/pages/games.html.twig', [
            'games' => $games,
            'trending_games' => $trendingGames,
            'categories' => $categoryRepository->findAllOrdered(),
            'publishers' => $gameRepository->findDistinctPublishers(),
            'tournaments_count_by_game_id' => $totalTournamentsByGameId,
            'active_tournaments_count_by_game_id' => $activeTournamentsByGameId,
            'trending_active_tournaments_count_by_game_id' => $trendingActiveTournamentsByGameId,
            'pagination' => $pagination,
            'filters' => [
                'q' => $query,
                'category' => $categoryId,
                'publisher' => $publisher,
                'active' => $activeOnly,
                'sort' => $sort,
            ],
        ]);
    }

    private function toPositiveInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $asInt = (int) $value;

        return $asInt > 0 ? $asInt : null;
    }
}
