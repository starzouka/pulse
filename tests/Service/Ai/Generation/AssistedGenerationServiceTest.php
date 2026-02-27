<?php

declare(strict_types=1);

namespace App\Tests\Service\Ai\Generation;

use App\Entity\Team;
use App\Entity\User;
use App\Service\Ai\Generation\AssistedGenerationService;
use App\Service\Ai\Generation\LocalFallbackGenerationService;
use App\Service\Ai\Generation\RemoteContentGenerationInterface;
use PHPUnit\Framework\TestCase;

final class AssistedGenerationServiceTest extends TestCase
{
    public function testInvitationGenerationFallsBackWhenRemoteIsUnavailable(): void
    {
        $remote = new class () implements RemoteContentGenerationInterface {
            public function isEnabled(): bool
            {
                return false;
            }

            public function getProvider(): string
            {
                return 'openai';
            }

            public function getModel(): string
            {
                return 'gpt-4o-mini';
            }

            public function generateInvitationMessage(array $context): ?string
            {
                return null;
            }

            public function generateTeamBranding(array $context): ?array
            {
                return null;
            }
        };

        $service = new AssistedGenerationService($remote, new LocalFallbackGenerationService());

        $team = (new Team())
            ->setName('Pulse Titans')
            ->setRegion('Tunis');
        $captain = (new User())
            ->setUsername('captain_one')
            ->setDisplayName('Captain One')
            ->setEmail('captain@example.test');
        $candidate = (new User())
            ->setUsername('player_x')
            ->setDisplayName('Player X')
            ->setEmail('player@example.test')
            ->setRole(User::DOMAIN_ROLE_PLAYER);

        $result = $service->generateInvitationMessage($team, $captain, $candidate);

        self::assertSame('local_fallback', $result['source']);
        self::assertSame('local', $result['provider']);
        self::assertStringContainsString('Pulse Titans', $result['message']);
        self::assertNotEmpty($result['message']);
    }

    public function testBrandingUsesRemoteWhenAvailable(): void
    {
        $remote = new class () implements RemoteContentGenerationInterface {
            public function isEnabled(): bool
            {
                return true;
            }

            public function getProvider(): string
            {
                return 'openai';
            }

            public function getModel(): string
            {
                return 'gpt-4o-mini';
            }

            public function generateInvitationMessage(array $context): ?string
            {
                return 'unused';
            }

            public function generateTeamBranding(array $context): ?array
            {
                return [
                    'bio' => 'Equipe tactique orientee discipline et scrims competitifs.',
                    'slogan' => 'Strat first. Win always.',
                ];
            }
        };

        $service = new AssistedGenerationService($remote, new LocalFallbackGenerationService());

        $team = (new Team())
            ->setName('Pulse Titans')
            ->setRegion('Tunis');
        $captain = (new User())
            ->setUsername('captain_one')
            ->setDisplayName('Captain One')
            ->setEmail('captain@example.test');

        $result = $service->generateTeamBranding($team, $captain);

        self::assertSame('remote', $result['source']);
        self::assertSame('openai', $result['provider']);
        self::assertSame('gpt-4o-mini', $result['model']);
        self::assertSame('Strat first. Win always.', $result['slogan']);
    }
}

