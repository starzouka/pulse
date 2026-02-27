<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    /** @var list<string> */
    private const FRONT_VISIBLE_STATUSES = [
        \App\Entity\Game::STATUS_DRAFT,
        \App\Entity\Game::STATUS_PENDING,
        \App\Entity\Game::STATUS_PUBLISHED,
    ];

    #[Route('/pages/games', name: 'front_games', methods: ['GET'])]
    public function index(
        Request $request,
        GameRepository $gameRepository,
        CategoryRepository $categoryRepository,
        TournamentRepository $tournamentRepository,
        PaginatorInterface $paginator,
    ): Response {
        $perPage = max(1, min(50, $request->query->getInt('per_page', 6)));

        $query = trim((string) $request->query->get('q', ''));
        $categoryId = $this->toPositiveInt($request->query->get('category'));
        $publisher = trim((string) $request->query->get('publisher', ''));
        $activeOnly = $request->query->getBoolean('active');

        $sort = strtolower(trim((string) $request->query->get('sort', 'name')));
        if (!in_array($sort, ['name', 'latest', 'publisher', 'category', 'popular'], true)) {
            $sort = 'name';
        }

        $repositorySort = $sort === 'popular' ? 'popular' : $sort;
        $games = $gameRepository->searchCatalog(
            $query !== '' ? $query : null,
            $categoryId,
            $publisher !== '' ? $publisher : null,
            $activeOnly,
            $repositorySort,
            180,
            self::FRONT_VISIBLE_STATUSES,
        );

        $trendingGames = $gameRepository->findTrending(6, self::FRONT_VISIBLE_STATUSES);

        $gameIds = [];
        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if ($gameId !== null) {
                $gameIds[] = $gameId;
            }
        }

        $totalTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);

        $pagination = $paginator->paginate(
            $games,
            max(1, $request->query->getInt('page', 1)),
            $perPage
        );
        $games = $pagination->getItems();

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
            'pagination' => [
                'items' => $games,
                'current_page' => $pagination->getCurrentPageNumber(),
                'total_pages' => max(1, (int) $pagination->getPageCount()),
                'total_items' => (int) $pagination->getTotalItemCount(),
                'per_page' => $perPage,
                'has_previous' => $pagination->getCurrentPageNumber() > 1,
                'has_next' => $pagination->getCurrentPageNumber() < max(1, (int) $pagination->getPageCount()),
                'previous_page' => max(1, $pagination->getCurrentPageNumber() - 1),
                'next_page' => min(max(1, (int) $pagination->getPageCount()), $pagination->getCurrentPageNumber() + 1),
            ],
            'filters' => [
                'q' => $query,
                'category' => $categoryId,
                'publisher' => $publisher,
                'active' => $activeOnly,
                'sort' => $sort,
            ],
            'games_pagination' => $pagination,
            'trending_games' => $trendingGames,
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
