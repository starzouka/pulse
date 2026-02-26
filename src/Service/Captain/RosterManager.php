<?php

declare(strict_types=1);

namespace App\Service\Captain;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamMemberRepository;

final class RosterManager
{
    public const ROLE_CAPTAIN = 'CAPTAIN';
    public const ROLE_CO_CAPTAIN = 'CO_CAPTAIN';
    public const ROLE_STARTER = 'STARTER';
    public const ROLE_SUBSTITUTE = 'SUBSTITUTE';

    /**
     * @var list<string>
     */
    private const ALLOWED_ROLES = [
        self::ROLE_CAPTAIN,
        self::ROLE_CO_CAPTAIN,
        self::ROLE_STARTER,
        self::ROLE_SUBSTITUTE,
    ];

    public function __construct(
        private readonly TeamMemberRepository $teamMemberRepository,
        private readonly int $maxActiveMembers = 10,
        private readonly int $maxSubstitutes = 3,
        private readonly int $maxCoCaptains = 2,
    ) {
    }

    public function normalizeRole(?string $role): string
    {
        $normalized = strtoupper(trim((string) $role));

        return in_array($normalized, self::ALLOWED_ROLES, true) ? $normalized : self::ROLE_STARTER;
    }

    /**
     * @return array{ok: bool, message: string}
     */
    public function validateRoleChange(Team $team, TeamMember $membership, string $newRole): array
    {
        $newRole = $this->normalizeRole($newRole);
        $memberUser = $membership->getUserId();
        $captainUserId = $team->getCaptainUserId()?->getUserId();

        if ($memberUser instanceof User && $memberUser->getUserId() === $captainUserId) {
            if ($newRole !== self::ROLE_CAPTAIN) {
                return ['ok' => false, 'message' => 'Le capitaine principal doit garder le rôle CAPTAIN.'];
            }

            return ['ok' => true, 'message' => ''];
        }

        if ($newRole === self::ROLE_CAPTAIN) {
            return ['ok' => false, 'message' => 'Utilisez le rôle CO_CAPTAIN pour les adjoints.'];
        }

        $activeMembers = $this->teamMemberRepository->findByTeamWithUser($team, true);
        $coCaptains = 0;
        $substitutes = 0;
        foreach ($activeMembers as $activeMember) {
            if ($activeMember->getUserId()?->getUserId() === $memberUser?->getUserId()) {
                continue;
            }
            if ($activeMember->getRosterRole() === self::ROLE_CO_CAPTAIN) {
                $coCaptains++;
            }
            if ($activeMember->getRosterRole() === self::ROLE_SUBSTITUTE) {
                $substitutes++;
            }
        }

        if ($newRole === self::ROLE_CO_CAPTAIN && $coCaptains >= $this->maxCoCaptains) {
            return ['ok' => false, 'message' => sprintf('Maximum %d co-capitaines atteint.', $this->maxCoCaptains)];
        }

        if ($newRole === self::ROLE_SUBSTITUTE && $substitutes >= $this->maxSubstitutes) {
            return ['ok' => false, 'message' => sprintf('Maximum %d remplaçants atteint.', $this->maxSubstitutes)];
        }

        return ['ok' => true, 'message' => ''];
    }

    /**
     * @return array{ok: bool, message: string}
     */
    public function validateAddActiveMember(Team $team): array
    {
        $count = count($this->teamMemberRepository->findByTeamWithUser($team, true));
        if ($count >= $this->maxActiveMembers) {
            return ['ok' => false, 'message' => sprintf('Roster complet (%d membres actifs max).', $this->maxActiveMembers)];
        }

        return ['ok' => true, 'message' => ''];
    }

    /**
     * @return array{total_active:int,captains:int,co_captains:int,starters:int,substitutes:int}
     */
    public function buildRosterStats(Team $team): array
    {
        $activeMembers = $this->teamMemberRepository->findByTeamWithUser($team, true);
        $stats = [
            'total_active' => count($activeMembers),
            'captains' => 0,
            'co_captains' => 0,
            'starters' => 0,
            'substitutes' => 0,
        ];

        foreach ($activeMembers as $member) {
            switch ($member->getRosterRole()) {
                case self::ROLE_CAPTAIN:
                    $stats['captains']++;
                    break;
                case self::ROLE_CO_CAPTAIN:
                    $stats['co_captains']++;
                    break;
                case self::ROLE_SUBSTITUTE:
                    $stats['substitutes']++;
                    break;
                case self::ROLE_STARTER:
                default:
                    $stats['starters']++;
                    break;
            }
        }

        return $stats;
    }

    /**
     * @return list<string>
     */
    public function getAssignableRoles(): array
    {
        return [self::ROLE_CO_CAPTAIN, self::ROLE_STARTER, self::ROLE_SUBSTITUTE];
    }
}

