<?php

declare(strict_types=1);

namespace App\Service\Ai\Moderation;

final class ChatCategoryClassifier
{
    /**
     * @return array{
     *   scam_recruitment:float,
     *   harassment:float,
     *   aggressive_tone:float,
     *   signals:list<string>
     * }
     */
    public function classify(string $message): array
    {
        $text = trim($message);
        if ($text === '') {
            return [
                'scam_recruitment' => 0.0,
                'harassment' => 0.0,
                'aggressive_tone' => 0.0,
                'signals' => [],
            ];
        }

        $scamScore = 0.0;
        $harassmentScore = 0.0;
        $aggressiveScore = 0.0;
        $signals = [];

        if ((bool) preg_match('/\b(recruit|join our team|guaranteed|instant payment|salary)\b/i', $text)) {
            $scamScore += 0.35;
            $signals[] = 'recruitment_claim';
        }

        if ((bool) preg_match('/\b(free money|easy money|quick cash)\b/i', $text)) {
            $scamScore += 0.4;
            $signals[] = 'money_bait';
        }

        if ((bool) preg_match('/\b(crypto|usdt|bitcoin|wallet|seed phrase|investment|airdrop)\b/i', $text)) {
            $scamScore += 0.45;
            $signals[] = 'scam_finance_terms';
        }

        if ((bool) preg_match('/\b(bit\.ly|tinyurl\.com|t\.co)\b/i', $text)) {
            $scamScore += 0.3;
            $signals[] = 'short_link_redirect';
        }

        if ((bool) preg_match('/\b(telegram|whatsapp|discord\.gg)\b/i', $text)) {
            $scamScore += 0.25;
            $signals[] = 'off_platform_redirect';
        }

        if ((bool) preg_match_all('/\b(idiot|moron|loser|trash|kys|kill yourself|go die)\b/i', $text, $insultMatches)) {
            $insultsCount = count($insultMatches[0] ?? []);
            $harassmentScore += $insultsCount >= 2 ? 0.8 : 0.6;
            $signals[] = 'harassment_insult';
        }

        if ((bool) preg_match('/\b(hate you|you are useless|shut up)\b/i', $text)) {
            $harassmentScore += 0.35;
            $signals[] = 'targeted_harassment';
        }

        if ((bool) preg_match('/([!?])\1{2,}/', $text)) {
            $aggressiveScore += 0.25;
            $signals[] = 'aggressive_punctuation';
        }

        if ($this->isAllCapsAggressive($text)) {
            $aggressiveScore += 0.6;
            $signals[] = 'all_caps_tone';
        }

        if ((bool) preg_match('/\b(now|immediately|right now)\b/i', $text)) {
            $aggressiveScore += 0.1;
            $signals[] = 'pressure_tone';
        }

        return [
            'scam_recruitment' => round(min(1, $scamScore), 2),
            'harassment' => round(min(1, $harassmentScore), 2),
            'aggressive_tone' => round(min(1, $aggressiveScore), 2),
            'signals' => array_values(array_unique($signals)),
        ];
    }

    private function isAllCapsAggressive(string $text): bool
    {
        $lettersOnly = preg_replace('/[^a-zA-Z]/', '', $text);
        if (!is_string($lettersOnly) || strlen($lettersOnly) < 10) {
            return false;
        }

        $upperOnly = preg_replace('/[^A-Z]/', '', $lettersOnly);
        if (!is_string($upperOnly)) {
            return false;
        }

        $ratio = strlen($upperOnly) / max(1, strlen($lettersOnly));

        return $ratio >= 0.7;
    }
}
