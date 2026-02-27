<?php

declare(strict_types=1);

namespace App\Service\Ai\Moderation;

final class ModerationFeedbackFormatter
{
    /**
     * @param array<string, mixed> $moderation
     * @return array{level:'success'|'info'|'warning'|'error',message:string,decision:'allow'|'warn'|'block'}
     */
    public function format(array $moderation, string $subjectLabel = 'Message'): array
    {
        $decision = strtolower(trim((string) ($moderation['decision'] ?? 'allow')));
        if (!in_array($decision, ['allow', 'warn', 'block'], true)) {
            $decision = 'allow';
        }

        $spamScore = max(0, min(100, (int) ($moderation['spam_score'] ?? 0)));
        $toxicityScore = max(0, min(100, (int) ($moderation['toxicity_score'] ?? 0)));

        $categories = is_array($moderation['categories'] ?? null) ? $moderation['categories'] : [];
        $dominantCategory = $this->resolveDominantCategory($categories);
        $categoryLabel = $dominantCategory !== null ? $this->toReadableCategory($dominantCategory) : null;

        $scoresSuffix = sprintf(' [spam=%d/100, toxicite=%d/100]', $spamScore, $toxicityScore);

        if ($decision === 'block') {
            $message = sprintf(
                '%s bloque: risque eleve detecte%s.%s',
                $subjectLabel,
                $categoryLabel !== null ? ' (' . $categoryLabel . ')' : '',
                $scoresSuffix
            );

            return [
                'level' => 'error',
                'message' => $message,
                'decision' => 'block',
            ];
        }

        if ($decision === 'warn') {
            $message = sprintf(
                '%s sensible: avertissement applique%s.%s',
                $subjectLabel,
                $categoryLabel !== null ? ' (' . $categoryLabel . ')' : '',
                $scoresSuffix
            );

            return [
                'level' => 'warning',
                'message' => $message,
                'decision' => 'warn',
            ];
        }

        $message = sprintf(
            '%s normal autorise. Aucun risque critique detecte.%s',
            $subjectLabel,
            $scoresSuffix
        );

        return [
            'level' => 'info',
            'message' => $message,
            'decision' => 'allow',
        ];
    }

    /**
     * @param array<string, mixed> $categories
     */
    private function resolveDominantCategory(array $categories): ?string
    {
        $topCategory = null;
        $topScore = 0.0;

        foreach ($categories as $category => $score) {
            $numericScore = (float) $score;
            if ($numericScore <= $topScore) {
                continue;
            }

            $topScore = $numericScore;
            $topCategory = (string) $category;
        }

        if ($topCategory === null || $topScore <= 0.0) {
            return null;
        }

        return $topCategory;
    }

    private function toReadableCategory(string $category): string
    {
        return match ($category) {
            'scam_recruitment' => 'scam_recruitment',
            'harassment' => 'harassment',
            'aggressive_tone' => 'aggressive_tone',
            default => $category,
        };
    }
}
