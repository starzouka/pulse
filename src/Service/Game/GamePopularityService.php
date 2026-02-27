<?php

declare(strict_types=1);

namespace App\Service\Game;

use App\Entity\Game;
use App\Repository\GameFavoriteRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;

final class GamePopularityService
{
    public function __construct(
        private readonly TournamentRepository $tournamentRepository,
        private readonly TournamentTeamRepository $tournamentTeamRepository,
        private readonly GameFavoriteRepository $gameFavoriteRepository,
    ) {
    }

    public function recompute(Game $game): void
    {
        $gameId = $game->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return;
        }

        $allByGame = $this->tournamentRepository->countByGameIds([$gameId]);
        $activeByGame = $this->tournamentRepository->countByGameIds([$gameId], ['OPEN', 'ONGOING']);
        $registrationsByGame = $this->tournamentTeamRepository->countRegistrationsByGameIds([$gameId], ['PENDING', 'ACCEPTED']);
        $favoritesCount = $this->gameFavoriteRepository->countByGame($game);

        $totalTournaments = (int) ($allByGame[$gameId] ?? 0);
        $activeTournaments = (int) ($activeByGame[$gameId] ?? 0);
        $registrations = (int) ($registrationsByGame[$gameId] ?? 0);
        $views = $game->getViewsCount();
        $favorites = max(0, $favoritesCount);

        // Weighted business score: interactions + tournament activity.
        $score = (1 * $views)
            + (4 * $favorites)
            + (6 * $activeTournaments)
            + (2 * $registrations)
            + (1 * $totalTournaments);

        $game
            ->setFavoritesCount($favorites)
            ->setPopularityScore($score);
    }
}
