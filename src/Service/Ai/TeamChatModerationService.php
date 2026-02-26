<?php

declare(strict_types=1);

namespace App\Service\Ai;

final class TeamChatModerationService
{
    public function __construct(
        private readonly MessageModerationService $baseModeration,
    ) {
    }

    /**
     * @return array{
     *   is_allowed: bool,
     *   severity: string,
     *   category: string,
     *   reasons: list<string>,
     *   spam_matches: list<string>,
     *   toxic_matches: list<string>
     * }
     */
    public function analyzeTeamChat(string $text): array
    {
        $base = $this->baseModeration->analyze($text);
        $normalized = mb_strtolower(trim($text));

        $category = 'clean';
        $reasons = $base['reasons'];

        $harassmentSignals = ['harass', 'insult', 'humiliate', 'shut up', 'kill yourself'];
        $scamSignals = ['crypto', 'signal', 'investment', 'send money', 'urgent transfer', 'casino'];
        $capsRatio = $this->computeUpperRatio($text);

        foreach ($scamSignals as $signal) {
            if (str_contains($normalized, $signal)) {
                $category = 'scam_recruitment';
                $reasons[] = 'tentative de scam/recrutement douteux';
                break;
            }
        }

        if ($category === 'clean') {
            foreach ($harassmentSignals as $signal) {
                if (str_contains($normalized, $signal)) {
                    $category = 'harassment';
                    $reasons[] = 'harcèlement/attaque verbale';
                    break;
                }
            }
        }

        if ($category === 'clean' && $capsRatio > 0.65 && mb_strlen($text) >= 12) {
            $category = 'aggressive_tone';
            $reasons[] = 'écriture agressive (MAJUSCULES)';
        }

        $isAllowed = $base['is_allowed'];
        $severity = $base['severity'];

        if ($category === 'scam_recruitment' || $category === 'harassment') {
            $isAllowed = false;
            $severity = 'high';
        } elseif ($category === 'aggressive_tone' && $severity === 'none') {
            $severity = 'medium';
        }

        return [
            'is_allowed' => $isAllowed,
            'severity' => $severity,
            'category' => $category,
            'reasons' => array_values(array_unique($reasons)),
            'spam_matches' => $base['spam_matches'],
            'toxic_matches' => $base['toxic_matches'],
        ];
    }

    private function computeUpperRatio(string $text): float
    {
        $letters = preg_replace('/[^A-Za-z]/', '', $text) ?? '';
        if ($letters === '') {
            return 0.0;
        }

        $upper = preg_replace('/[^A-Z]/', '', $letters) ?? '';

        return strlen($upper) / max(1, strlen($letters));
    }
}

