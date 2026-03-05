<?php

declare(strict_types=1);

namespace App\Tests\Unit\Security;

use App\Entity\Team;
use App\Entity\User;
use App\Security\Voter\TeamVoter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

final class TeamVoterTest extends TestCase
{
    public function testAdminCanManageAnyTeam(): void
    {
        $voter = new TeamVoter();
        $team = (new Team())->setCaptainUserId($this->buildUser(10, User::DOMAIN_ROLE_PLAYER));
        $admin = $this->buildUser(1, User::DOMAIN_ROLE_ADMIN);

        $result = $voter->vote($this->tokenFor($admin), $team, [TeamVoter::TEAM_EDIT]);

        self::assertSame(VoterInterface::ACCESS_GRANTED, $result);
    }

    public function testCaptainCanManageOwnTeam(): void
    {
        $voter = new TeamVoter();
        $captain = $this->buildUser(42, User::DOMAIN_ROLE_CAPTAIN);
        $team = (new Team())->setCaptainUserId($captain);

        $result = $voter->vote($this->tokenFor($captain), $team, [TeamVoter::TEAM_INVITE]);

        self::assertSame(VoterInterface::ACCESS_GRANTED, $result);
    }

    public function testNonCaptainIsDenied(): void
    {
        $voter = new TeamVoter();
        $captain = $this->buildUser(100, User::DOMAIN_ROLE_CAPTAIN);
        $member = $this->buildUser(200, User::DOMAIN_ROLE_PLAYER);
        $team = (new Team())->setCaptainUserId($captain);

        $result = $voter->vote($this->tokenFor($member), $team, [TeamVoter::TEAM_KICK]);

        self::assertSame(VoterInterface::ACCESS_DENIED, $result);
    }

    public function testUnsupportedSubjectReturnsAbstain(): void
    {
        $voter = new TeamVoter();
        $user = $this->buildUser(5, User::DOMAIN_ROLE_PLAYER);

        $result = $voter->vote($this->tokenFor($user), new \stdClass(), [TeamVoter::TEAM_EDIT]);

        self::assertSame(VoterInterface::ACCESS_ABSTAIN, $result);
    }

    private function tokenFor(mixed $user): TokenInterface
    {
        $token = $this->createMock(TokenInterface::class);
        $token
            ->method('getUser')
            ->willReturn($user);

        return $token;
    }

    private function buildUser(int $id, string $role): User
    {
        return (new User())
            ->setUserId($id)
            ->setRole($role);
    }
}
