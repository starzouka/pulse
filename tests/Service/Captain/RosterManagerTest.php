<?php

declare(strict_types=1);

namespace App\Tests\Service\Captain;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Repository\TeamMemberRepository;
use App\Service\Captain\RosterManager;
use PHPUnit\Framework\TestCase;

final class RosterManagerTest extends TestCase
{
    public function testDeniesExtraCoCaptainWhenLimitReached(): void
    {
        $repository = $this->createMock(TeamMemberRepository::class);
        $repository
            ->method('countActiveByRosterRole')
            ->willReturn([
                TeamMember::ROSTER_ROLE_CAPTAIN => 1,
                TeamMember::ROSTER_ROLE_CO_CAPTAIN => 2,
                TeamMember::ROSTER_ROLE_STARTER => 4,
                TeamMember::ROSTER_ROLE_SUBSTITUTE => 2,
            ]);

        $membership = (new TeamMember())->setRosterRole(TeamMember::ROSTER_ROLE_STARTER);
        $result = (new RosterManager())->validateRoleChange(
            new Team(),
            $membership,
            TeamMember::ROSTER_ROLE_CO_CAPTAIN,
            $repository
        );

        self::assertFalse($result['allowed']);
        self::assertStringContainsString('CO_CAPTAIN', $result['reason']);
    }

    public function testAllowsKeepingCurrentCoCaptainRoleAtLimit(): void
    {
        $repository = $this->createMock(TeamMemberRepository::class);
        $repository
            ->method('countActiveByRosterRole')
            ->willReturn([
                TeamMember::ROSTER_ROLE_CAPTAIN => 1,
                TeamMember::ROSTER_ROLE_CO_CAPTAIN => 2,
                TeamMember::ROSTER_ROLE_STARTER => 4,
                TeamMember::ROSTER_ROLE_SUBSTITUTE => 2,
            ]);

        $membership = (new TeamMember())->setRosterRole(TeamMember::ROSTER_ROLE_CO_CAPTAIN);
        $result = (new RosterManager())->validateRoleChange(
            new Team(),
            $membership,
            TeamMember::ROSTER_ROLE_CO_CAPTAIN,
            $repository
        );

        self::assertTrue($result['allowed']);
    }

    public function testDeniesExtraSubstituteWhenLimitReached(): void
    {
        $repository = $this->createMock(TeamMemberRepository::class);
        $repository
            ->method('countActiveByRosterRole')
            ->willReturn([
                TeamMember::ROSTER_ROLE_CAPTAIN => 1,
                TeamMember::ROSTER_ROLE_CO_CAPTAIN => 1,
                TeamMember::ROSTER_ROLE_STARTER => 4,
                TeamMember::ROSTER_ROLE_SUBSTITUTE => 5,
            ]);

        $membership = (new TeamMember())->setRosterRole(TeamMember::ROSTER_ROLE_STARTER);
        $result = (new RosterManager())->validateRoleChange(
            new Team(),
            $membership,
            TeamMember::ROSTER_ROLE_SUBSTITUTE,
            $repository
        );

        self::assertFalse($result['allowed']);
        self::assertStringContainsString('SUBSTITUTE', $result['reason']);
    }
}

