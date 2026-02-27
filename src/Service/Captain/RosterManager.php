<?php

declare(strict_types=1);

namespace App\Service\Captain;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Repository\TeamMemberRepository;

final class RosterManager
{
    private const MAX_CO_CAPTAINS = 2;
    private const MAX_SUBSTITUTES = 5;

    /**
     * @return array{allowed:bool, reason:string}
     */
    public function validateRoleChange(
        Team $team,
        TeamMember $membership,
        string $targetRole,
        TeamMemberRepository $teamMemberRepository,
    ): array {
        $normalizedTargetRole = strtoupper(trim($targetRole));
        $currentRole = strtoupper(trim($membership->getRosterRole()));
        $distribution = $teamMemberRepository->countActiveByRosterRole($team);

        if (isset($distribution[$currentRole])) {
            $distribution[$currentRole] = max(0, (int) $distribution[$currentRole] - 1);
        }

        if (isset($distribution[$normalizedTargetRole])) {
            $distribution[$normalizedTargetRole] = (int) $distribution[$normalizedTargetRole] + 1;
        }

        if (
            $normalizedTargetRole === TeamMember::ROSTER_ROLE_CO_CAPTAIN
            && $distribution[TeamMember::ROSTER_ROLE_CO_CAPTAIN] > self::MAX_CO_CAPTAINS
        ) {
            return [
                'allowed' => false,
                'reason' => sprintf(
                    'Limite roster: maximum %d CO_CAPTAIN autorises.',
                    self::MAX_CO_CAPTAINS
                ),
            ];
        }

        if (
            $normalizedTargetRole === TeamMember::ROSTER_ROLE_SUBSTITUTE
            && $distribution[TeamMember::ROSTER_ROLE_SUBSTITUTE] > self::MAX_SUBSTITUTES
        ) {
            return [
                'allowed' => false,
                'reason' => sprintf(
                    'Limite roster: maximum %d SUBSTITUTE autorises.',
                    self::MAX_SUBSTITUTES
                ),
            ];
        }

        return [
            'allowed' => true,
            'reason' => 'Role roster autorise.',
        ];
    }
}

