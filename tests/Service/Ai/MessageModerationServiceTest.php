<?php

declare(strict_types=1);

namespace App\Tests\Service\Ai;

use App\Service\Ai\MessageModerationService;
use PHPUnit\Framework\TestCase;

final class MessageModerationServiceTest extends TestCase
{
    private function service(): MessageModerationService
    {
        return new MessageModerationService(
            ['bit.ly', 'free money', 'click here', 'telegram'],
            ['idiot', 'trash', 'kill yourself']
        );
    }

    public function testAllowsNormalMessage(): void
    {
        $result = $this->service()->analyze('Salut, on cherche un joueur pour notre roster ce soir. Tu es dispo ?');

        self::assertTrue($result['is_allowed']);
        self::assertSame('none', $result['severity']);
        self::assertSame([], $result['spam_matches']);
        self::assertSame([], $result['toxic_matches']);
    }

    public function testBlocksSpamMessage(): void
    {
        $result = $this->service()->analyze('Click here bit.ly/win-now free money 99999999');

        self::assertFalse($result['is_allowed']);
        self::assertSame('high', $result['severity']);
        self::assertContains('bit.ly', $result['spam_matches']);
    }

    public function testBlocksToxicMessage(): void
    {
        $result = $this->service()->analyze('You are trash idiot');

        self::assertFalse($result['is_allowed']);
        self::assertSame('high', $result['severity']);
        self::assertContains('trash', $result['toxic_matches']);
        self::assertContains('idiot', $result['toxic_matches']);
    }
}

