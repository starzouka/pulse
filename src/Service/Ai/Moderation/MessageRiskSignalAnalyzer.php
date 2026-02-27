<?php

declare(strict_types=1);

namespace App\Service\Ai\Moderation;

final class MessageRiskSignalAnalyzer
{
    /**
     * @return array{
     *   spam_score:int,
     *   toxicity_score:int,
     *   signals:list<string>
     * }
     */
    public function analyze(string $message): array
    {
        $text = trim($message);
        if ($text === '') {
            return [
                'spam_score' => 0,
                'toxicity_score' => 0,
                'signals' => [],
            ];
        }

        $lowerText = mb_strtolower($text, 'UTF-8');
        $spamScore = 0;
        $toxicityScore = 0;
        $signals = [];

        if ((bool) preg_match('/https?:\/\/|www\./i', $text)) {
            $spamScore += 18;
            $signals[] = 'contains_link';
        }

        if ((bool) preg_match('/\b(telegram|whatsapp|discord\.gg|dm me|contact me)\b/i', $text)) {
            $spamScore += 22;
            $signals[] = 'off_platform_contact';
        }

        if ((bool) preg_match('/\b(crypto|usdt|bitcoin|wallet|airdrop|investment)\b/i', $text)) {
            $spamScore += 24;
            $signals[] = 'financial_lure';
        }

        if ((bool) preg_match('/([!?])\1{2,}/', $text)) {
            $spamScore += 8;
            $toxicityScore += 8;
            $signals[] = 'repeated_punctuation';
        }

        if ((bool) preg_match('/(.)\1{5,}/u', $text)) {
            $spamScore += 10;
            $signals[] = 'repeated_characters';
        }

        if ($this->hasExcessiveUppercase($text)) {
            $spamScore += 12;
            $toxicityScore += 6;
            $signals[] = 'excessive_uppercase';
        }

        if ((bool) preg_match('/\b(idiot|stupid|loser|moron|trash|noob|kys|kill yourself)\b/i', $lowerText)) {
            $toxicityScore += 34;
            $signals[] = 'insult_or_abuse';
        }

        if ((bool) preg_match('/\b(hate you|destroy you|shut up)\b/i', $lowerText)) {
            $toxicityScore += 24;
            $signals[] = 'aggressive_language';
        }

        return [
            'spam_score' => max(0, min(100, $spamScore)),
            'toxicity_score' => max(0, min(100, $toxicityScore)),
            'signals' => array_values(array_unique($signals)),
        ];
    }

    private function hasExcessiveUppercase(string $text): bool
    {
        $lettersOnly = preg_replace('/[^a-zA-Z]/', '', $text);
        if (!is_string($lettersOnly) || $lettersOnly === '' || strlen($lettersOnly) < 12) {
            return false;
        }

        $upperOnly = preg_replace('/[^A-Z]/', '', $lettersOnly);
        if (!is_string($upperOnly)) {
            return false;
        }

        $ratio = strlen($upperOnly) / max(1, strlen($lettersOnly));

        return $ratio >= 0.6;
    }
}

