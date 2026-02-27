<?php

declare(strict_types=1);

namespace App\Service\Catalog;

use App\Entity\Game;
use App\Repository\GameFavoriteRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;

final class GamePopularityService
{
    public function __construct(
        private readonly GameRepository $gameRepository,
        private readonly TournamentRepository $tournamentRepository,
        private readonly TournamentTeamRepository $tournamentTeamRepository,
        private readonly GameFavoriteRepository $gameFavoriteRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    public function refreshScoresForAllGames(bool $flush = true): void
    {
        $games = $this->gameRepository->findAll();
        if ($games === []) {
            return;
        }

        $this->refreshScoresForGames($games, $flush);
    }

    /**
     * @param list<Game> $games
     */
    public function refreshScoresForGames(array $games, bool $flush = true): void
    {
        $gameIds = [];
        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if (is_int($gameId) && $gameId > 0) {
                $gameIds[] = $gameId;
            }
        }

        if ($gameIds === []) {
            return;
        }

        $totalTournamentsByGameId = $this->tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $this->tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);
        $registrationsByGameId = $this->tournamentTeamRepository->countByGameIds($gameIds, ['PENDING', 'ACCEPTED']);
        $favoritesByGameId = $this->gameFavoriteRepository->countByGameIds($gameIds);

        $hasChanges = false;

        foreach ($games as $game) {
            $gameId = $game->getGameId();
            if (!is_int($gameId) || $gameId <= 0) {
                continue;
            }

            $views = max(0, $game->getViewsCount());
            $favorites = max(0, (int) ($favoritesByGameId[$gameId] ?? 0));
            $activeTournaments = max(0, (int) ($activeTournamentsByGameId[$gameId] ?? 0));
            $registrations = max(0, (int) ($registrationsByGameId[$gameId] ?? 0));
            $totalTournaments = max(0, (int) ($totalTournamentsByGameId[$gameId] ?? 0));

            $score = ($views * 1)
                + ($favorites * 4)
                + ($activeTournaments * 6)
                + ($registrations * 2)
                + ($totalTournaments * 1);

            if ($game->getFavoritesCount() !== $favorites) {
                $game->setFavoritesCount($favorites);
                $hasChanges = true;
            }

            if ($game->getPopularityScore() !== $score) {
                $game->setPopularityScore($score);
                $hasChanges = true;
            }
        }

        if ($flush && $hasChanges) {
            $this->entityManager->flush();
        }
    }

    public function refreshAndFlushSingleGame(Game $game): int
    {
        $this->refreshScoresForGames([$game], true);

        return $game->getPopularityScore();
    }
}
