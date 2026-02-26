<?php

declare(strict_types=1);

namespace App\Tests\Service\Ai;

use App\Service\Ai\MessageModerationService;
use App\Service\Ai\TeamChatModerationService;
use PHPUnit\Framework\TestCase;

final class TeamChatModerationServiceTest extends TestCase
{
    private function service(): TeamChatModerationService
    {
        $base = new MessageModerationService(
            ['bit.ly', 'free money', 'telegram', 'urgent transfer'],
            ['idiot', 'trash', 'kill yourself']
        );

        return new TeamChatModerationService($base);
    }

    public function testDetectsScamRecruitment(): void
    {
        $result = $this->service()->analyzeTeamChat('Join our team, send money for premium crypto signal via telegram');

        self::assertFalse($result['is_allowed']);
        self::assertSame('scam_recruitment', $result['category']);
        self::assertSame('high', $result['severity']);
    }

    public function testDetectsAggressiveTone(): void
    {
        $result = $this->service()->analyzeTeamChat('HELLO TEAM WE START NOW PLEASE JOIN VC');

        self::assertTrue($result['is_allowed']);
        self::assertSame('aggressive_tone', $result['category']);
        self::assertContains($result['severity'], ['medium', 'high']);
    }
}

