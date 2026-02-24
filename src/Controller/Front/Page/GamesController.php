<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
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
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $categoryId = $this->toPositiveInt($request->query->get('category'));
        $publisher = trim((string) $request->query->get('publisher', ''));
        $activeOnly = $request->query->getBoolean('active');

        $sort = strtolower(trim((string) $request->query->get('sort', 'name')));
        if (!in_array($sort, ['name', 'latest', 'publisher', 'category', 'popular'], true)) {
            $sort = 'name';
        }

        $repositorySort = $sort === 'popular' ? 'name' : $sort;
        $games = $gameRepository->searchCatalog(
            $query !== '' ? $query : null,
            $categoryId,
            $publisher !== '' ? $publisher : null,
            $activeOnly,
            $repositorySort,
            180,
        );

        $gameIds = [];
        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if ($gameId !== null) {
                $gameIds[] = $gameId;
            }
        }

        $totalTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);

        if ($sort === 'popular') {
            usort($games, static function ($leftGame, $rightGame) use ($activeTournamentsByGameId, $totalTournamentsByGameId): int {
                $leftId = $leftGame->getGameId() ?? 0;
                $rightId = $rightGame->getGameId() ?? 0;

                $leftActive = $activeTournamentsByGameId[$leftId] ?? 0;
                $rightActive = $activeTournamentsByGameId[$rightId] ?? 0;
                if ($leftActive !== $rightActive) {
                    return $rightActive <=> $leftActive;
                }

                $leftTotal = $totalTournamentsByGameId[$leftId] ?? 0;
                $rightTotal = $totalTournamentsByGameId[$rightId] ?? 0;
                if ($leftTotal !== $rightTotal) {
                    return $rightTotal <=> $leftTotal;
                }

                return strcasecmp((string) $leftGame->getName(), (string) $rightGame->getName());
            });
        }

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

        return $this->render('front/pages/games.html.twig', [
            'games' => $games,
            'categories' => $categoryRepository->findAllOrdered(),
            'publishers' => $gameRepository->findDistinctPublishers(),
            'tournaments_count_by_game_id' => $totalTournamentsByGameId,
            'active_tournaments_count_by_game_id' => $activeTournamentsByGameId,
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
