<?php

declare(strict_types=1);

namespace App\Tests\Service\Ai\Moderation;

use App\Service\Ai\Moderation\ModerationFeedbackFormatter;
use PHPUnit\Framework\TestCase;

final class ModerationFeedbackFormatterTest extends TestCase
{
    private ModerationFeedbackFormatter $formatter;

    protected function setUp(): void
    {
        $this->formatter = new ModerationFeedbackFormatter();
    }

    public function testAllowFeedbackContainsClearNormalMessage(): void
    {
        $result = $this->formatter->format([
            'decision' => 'allow',
            'spam_score' => 10,
            'toxicity_score' => 5,
            'categories' => [
                'scam_recruitment' => 0.0,
                'harassment' => 0.0,
                'aggressive_tone' => 0.0,
            ],
        ], 'Message de conversation');

        self::assertSame('allow', $result['decision']);
        self::assertSame('info', $result['level']);
        self::assertStringContainsString('normal autorise', $result['message']);
    }

    public function testWarnFeedbackContainsCategory(): void
    {
        $result = $this->formatter->format([
            'decision' => 'warn',
            'spam_score' => 59,
            'toxicity_score' => 48,
            'categories' => [
                'scam_recruitment' => 0.2,
                'harassment' => 0.1,
                'aggressive_tone' => 0.72,
            ],
        ], 'Message d\'invitation');

        self::assertSame('warn', $result['decision']);
        self::assertSame('warning', $result['level']);
        self::assertStringContainsString('aggressive_tone', $result['message']);
    }

    public function testBlockFeedbackContainsCategoryAndHighRisk(): void
    {
        $result = $this->formatter->format([
            'decision' => 'block',
            'spam_score' => 90,
            'toxicity_score' => 82,
            'categories' => [
                'scam_recruitment' => 0.91,
                'harassment' => 0.1,
                'aggressive_tone' => 0.2,
            ],
        ], 'Message d\'invitation');

        self::assertSame('block', $result['decision']);
        self::assertSame('error', $result['level']);
        self::assertStringContainsString('scam_recruitment', $result['message']);
        self::assertStringContainsString('risque eleve', $result['message']);
    }
}
