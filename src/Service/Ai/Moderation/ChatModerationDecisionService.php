<?php

declare(strict_types=1);

namespace App\Service\Ai\Moderation;

final class ChatModerationDecisionService
{
    public function __construct(
        private readonly MessageRiskSignalAnalyzer $riskSignalAnalyzer,
        private readonly ChatCategoryClassifier $categoryClassifier,
    ) {
    }

    /**
     * @return array{
     *   decision:'block'|'warn'|'allow',
     *   reason:string,
     *   spam_score:int,
     *   toxicity_score:int,
     *   categories:array{
     *     scam_recruitment:float,
     *     harassment:float,
     *     aggressive_tone:float
     *   },
     *   signals:list<string>
     * }
     */
    public function moderateOutgoingMessage(string $message): array
    {
        $risk = $this->riskSignalAnalyzer->analyze($message);
        $categories = $this->categoryClassifier->classify($message);

        $signals = array_values(array_unique(array_merge(
            $risk['signals'],
            $categories['signals']
        )));

        $spamScore = (int) ($risk['spam_score'] ?? 0);
        $toxicityScore = (int) ($risk['toxicity_score'] ?? 0);
        $scamScore = (float) ($categories['scam_recruitment'] ?? 0);
        $harassmentScore = (float) ($categories['harassment'] ?? 0);
        $aggressiveScore = (float) ($categories['aggressive_tone'] ?? 0);

        $decision = 'allow';
        $reason = 'Message autorise.';

        if (
            $spamScore >= 82
            || $toxicityScore >= 85
            || $scamScore >= 0.8
            || $harassmentScore >= 0.75
        ) {
            $decision = 'block';
            $reason = 'Message bloque: risque eleve (spam/toxicite/scam/harcelement).';
        } elseif (
            $spamScore >= 55
            || $toxicityScore >= 60
            || $scamScore >= 0.5
            || $harassmentScore >= 0.45
            || $aggressiveScore >= 0.55
        ) {
            $decision = 'warn';
            $reason = 'Message sensible: avertissement avant envoi.';
        }

        return [
            'decision' => $decision,
            'reason' => $reason,
            'spam_score' => $spamScore,
            'toxicity_score' => $toxicityScore,
            'categories' => [
                'scam_recruitment' => $scamScore,
                'harassment' => $harassmentScore,
                'aggressive_tone' => $aggressiveScore,
            ],
            'signals' => $signals,
        ];
    }
}

