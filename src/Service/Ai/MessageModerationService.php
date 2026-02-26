<?php

declare(strict_types=1);

namespace App\Service\Ai;

final class MessageModerationService
{
    /**
     * @param list<string> $spamTerms
     * @param list<string> $toxicTerms
     */
    public function __construct(
        private readonly array $spamTerms,
        private readonly array $toxicTerms,
    ) {
    }

    /**
     * @return array{
     *   is_allowed: bool,
     *   severity: string,
     *   spam_score: int,
     *   toxicity_score: int,
     *   spam_matches: list<string>,
     *   toxic_matches: list<string>,
     *   reasons: list<string>
     * }
     */
    public function analyze(string $text): array
    {
        $normalized = mb_strtolower(trim($text));
        if ($normalized === '') {
            return [
                'is_allowed' => true,
                'severity' => 'none',
                'spam_score' => 0,
                'toxicity_score' => 0,
                'spam_matches' => [],
                'toxic_matches' => [],
                'reasons' => [],
            ];
        }

        $spamMatches = $this->findMatches($normalized, $this->spamTerms);
        $toxicMatches = $this->findMatches($normalized, $this->toxicTerms);

        $spamScore = count($spamMatches);
        $toxicityScore = count($toxicMatches);

        if (preg_match('/https?:\/\//i', $text)) {
            $spamScore++;
            $spamMatches[] = 'http-link';
        }
        if (preg_match('/\b\d{6,}\b/', $text)) {
            $spamScore++;
            $spamMatches[] = 'long-number';
        }
        if (preg_match('/(.)\1{5,}/u', $text)) {
            $spamScore++;
            $spamMatches[] = 'repeated-characters';
        }

        $reasons = [];
        if ($spamScore > 0) {
            $reasons[] = 'spam détecté';
        }
        if ($toxicityScore > 0) {
            $reasons[] = 'toxicité détectée';
        }

        $severity = 'none';
        $isAllowed = true;

        if ($spamScore >= 2 || $toxicityScore >= 2) {
            $severity = 'high';
            $isAllowed = false;
        } elseif ($spamScore >= 1 || $toxicityScore >= 1) {
            $severity = 'medium';
        }

        return [
            'is_allowed' => $isAllowed,
            'severity' => $severity,
            'spam_score' => $spamScore,
            'toxicity_score' => $toxicityScore,
            'spam_matches' => array_values(array_unique($spamMatches)),
            'toxic_matches' => array_values(array_unique($toxicMatches)),
            'reasons' => $reasons,
        ];
    }

    /**
     * @return list<string>
     */
    public function getSpamTerms(): array
    {
        return array_values($this->spamTerms);
    }

    /**
     * @return list<string>
     */
    public function getToxicTerms(): array
    {
        return array_values($this->toxicTerms);
    }

    /**
     * @param list<string> $terms
     * @return list<string>
     */
    private function findMatches(string $normalizedText, array $terms): array
    {
        $matches = [];
        foreach ($terms as $term) {
            $needle = mb_strtolower(trim($term));
            if ($needle !== '' && str_contains($normalizedText, $needle)) {
                $matches[] = $needle;
            }
        }

        return array_values(array_unique($matches));
    }
}

