<?php

declare(strict_types=1);

namespace App\Tests\Service\Ai\Moderation;

use App\Service\Ai\Moderation\ChatCategoryClassifier;
use App\Service\Ai\Moderation\ChatModerationDecisionService;
use App\Service\Ai\Moderation\MessageRiskSignalAnalyzer;
use PHPUnit\Framework\TestCase;

final class ChatModerationDecisionServiceTest extends TestCase
{
    private ChatModerationDecisionService $service;

    protected function setUp(): void
    {
        $this->service = new ChatModerationDecisionService(
            new MessageRiskSignalAnalyzer(),
            new ChatCategoryClassifier()
        );
    }

    public function testBlockDecisionForScamRecruitmentMessage(): void
    {
        $message = 'Join our team now for guaranteed salary in USDT, contact me on telegram and share your wallet link.';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('block', $result['decision']);
        self::assertGreaterThanOrEqual(0.8, $result['categories']['scam_recruitment']);
    }

    public function testWarnDecisionForHarassmentMessage(): void
    {
        $message = 'You are an idiot, calm down please.';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('warn', $result['decision']);
        self::assertGreaterThanOrEqual(0.45, $result['categories']['harassment']);
    }

    public function testAllowDecisionForNormalMessage(): void
    {
        $message = 'Salut, tu es disponible pour un scrim demain a 20h ?';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('allow', $result['decision']);
        self::assertLessThan(55, $result['spam_score']);
        self::assertLessThan(60, $result['toxicity_score']);
    }

    public function testWarnDecisionForUppercaseMessage(): void
    {
        $message = 'SALUT ON CHERCHE UN JOUEUR POUR CE SOIR VIENS MAINTENANT';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('warn', $result['decision']);
        self::assertGreaterThanOrEqual(0.55, $result['categories']['aggressive_tone']);
    }

    public function testBlockDecisionForShortLinkSpamMessage(): void
    {
        $message = 'bit.ly free money telegram 999999';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('block', $result['decision']);
        self::assertGreaterThanOrEqual(0.8, $result['categories']['scam_recruitment']);
    }

    public function testBlockDecisionForToxicInsultsMessage(): void
    {
        $message = 'idiot trash ...';
        $result = $this->service->moderateOutgoingMessage($message);

        self::assertSame('block', $result['decision']);
        self::assertGreaterThanOrEqual(0.75, $result['categories']['harassment']);
    }
}
