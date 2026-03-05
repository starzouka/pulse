<?php

declare(strict_types=1);

namespace App\Tests\Unit\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testSetEmailNormalizesCaseAndSpaces(): void
    {
        $user = new User();

        $user->setEmail('  Alice.Example@Mail.com  ');

        self::assertSame('alice.example@mail.com', $user->getEmail());
    }

    public function testSetRoleFallsBackToPlayerForUnknownRole(): void
    {
        $user = new User();

        $user->setRole('unknown-role');

        self::assertSame(User::DOMAIN_ROLE_PLAYER, $user->getRole());
        self::assertSame(['ROLE_PLAYER'], $user->getRoles());
    }

    public function testGetRolesAddsOrganizerSecurityRole(): void
    {
        $user = new User();

        $user->setRole(User::DOMAIN_ROLE_ORGANIZER);

        self::assertContains('ROLE_PLAYER', $user->getRoles());
        self::assertContains('ROLE_ORGANIZER', $user->getRoles());
    }

    public function testSetPasswordUpdatesPasswordHashStorage(): void
    {
        $user = new User();

        $user->setPassword('hash-value-123');

        self::assertSame('hash-value-123', $user->getPassword());
        self::assertSame('hash-value-123', $user->getPasswordHash());
    }
}
