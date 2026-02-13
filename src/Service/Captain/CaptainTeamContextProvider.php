<?php

declare(strict_types=1);

namespace App\Service\Captain;

use App\Entity\Team;
use App\Entity\User;
use App\Repository\TeamRepository;

final class CaptainTeamContextProvider
{
    public function __construct(
        private readonly TeamRepository $teamRepository,
    ) {
    }

    /**
     * @return array{
     *   teams:list<Team>,
     *   active_team:?Team
     * }
     */
    public function resolve(User $captainUser, ?int $requestedTeamId = null): array
    {
        $teams = $this->teamRepository->findByCaptainUser($captainUser, 200);
        $activeTeam = null;

        if ($requestedTeamId !== null && $requestedTeamId > 0) {
            foreach ($teams as $team) {
                if ($team->getTeamId() === $requestedTeamId) {
                    $activeTeam = $team;
                    break;
                }
            }
        }

        if (!$activeTeam instanceof Team && $teams !== []) {
            $activeTeam = $teams[0];
        }

        return [
            'teams' => $teams,
            'active_team' => $activeTeam,
        ];
    }

    public function resolveManagedTeamById(User $captainUser, int $teamId): ?Team
    {
        return $this->teamRepository->findOneByCaptainAndId($captainUser, $teamId);
    }
}

