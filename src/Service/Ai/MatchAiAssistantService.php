<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\MatchTeam;
use App\Entity\TournamentMatch;

final class MatchAiAssistantService
{
    public function __construct(
        private readonly ?OllamaClientService $ollamaClientService = null,
    ) {
    }

    /**
     * @param iterable<MatchTeam> $matchTeams
     * @return array<string, mixed>
     */
    public function analyzeMatchLocal(TournamentMatch $match, iterable $matchTeams): array
    {
        $participants = [];
        $findings = [];

        foreach ($matchTeams as $relation) {
            if (!$relation instanceof MatchTeam) {
                continue;
            }

            $team = $relation->getTeamId();
            $teamId = $team?->getTeamId();
            $teamName = trim((string) ($team?->getName() ?? ''));

            $participants[] = [
                'teamId' => is_int($teamId) ? $teamId : null,
                'teamName' => $teamName !== '' ? $teamName : 'Equipe',
                'score' => $relation->getScore(),
                'isWinner' => $relation->isWinner() === true,
            ];
        }

        $status = strtoupper((string) ($match->getStatus() ?? 'SCHEDULED'));
        $bestOf = $match->getBestOf();
        $scheduledAt = $match->getScheduledAt();
        $submittedBy = $match->getResultSubmittedByUserId();

        $teamCount = count($participants);
        if ($teamCount < 2) {
            $this->addFinding($findings, 28, 'Moins de 2 equipes sur le match.', 'HIGH');
        } elseif ($teamCount > 2) {
            $this->addFinding($findings, 10, sprintf('Plus de 2 equipes detectees (%d): verifier si le format est correct.', $teamCount), 'MEDIUM');
        }

        $teamIdsSeen = [];
        $teamNamesSeen = [];
        $winnerCount = 0;
        $scoresPresent = 0;
        $maxScore = null;
        $topScoreTeams = [];

        foreach ($participants as $participant) {
            $teamId = $participant['teamId'];
            if (is_int($teamId)) {
                if (isset($teamIdsSeen[$teamId])) {
                    $this->addFinding($findings, 30, 'Equipe dupliquee dans les participants.', 'HIGH');
                }
                $teamIdsSeen[$teamId] = true;
            }

            $teamNameKey = mb_strtolower(trim((string) $participant['teamName']));
            if ($teamNameKey !== '') {
                if (isset($teamNamesSeen[$teamNameKey])) {
                    $this->addFinding($findings, 18, 'Noms d equipe dupliques ou tres similaires dans le match.', 'MEDIUM');
                }
                $teamNamesSeen[$teamNameKey] = true;
            }

            if ($participant['isWinner'] === true) {
                ++$winnerCount;
            }

            $score = $participant['score'];
            if (is_int($score)) {
                ++$scoresPresent;
                if ($maxScore === null || $score > $maxScore) {
                    $maxScore = $score;
                    $topScoreTeams = [$participant['teamName']];
                } elseif ($score === $maxScore) {
                    $topScoreTeams[] = $participant['teamName'];
                }
            }
        }

        if ($scheduledAt === null && in_array($status, ['SCHEDULED', 'ONGOING'], true)) {
            $this->addFinding($findings, 12, 'Match planifie/en cours sans date de planification.', 'MEDIUM');
        }

        if ($scheduledAt instanceof \DateTimeInterface) {
            $scheduled = \DateTimeImmutable::createFromInterface($scheduledAt);
            $now = new \DateTimeImmutable();
            if ($status === 'FINISHED' && $scheduled > $now->modify('+2 hours')) {
                $this->addFinding($findings, 18, 'Match marque FINISHED alors que l horaire est dans le futur.', 'HIGH');
            }
            if (in_array($status, ['SCHEDULED', 'ONGOING'], true) && $scheduled < $now->modify('-7 days')) {
                $this->addFinding($findings, 10, 'Match non termine avec un horaire ancien (>7 jours).', 'MEDIUM');
            }
        }

        if ($status === 'FINISHED') {
            if ($scoresPresent === 0) {
                $this->addFinding($findings, 22, 'Match FINISHED sans scores saisis.', 'HIGH');
            }
            if ($winnerCount === 0) {
                $this->addFinding($findings, 26, 'Match FINISHED sans gagnant.', 'HIGH');
            } elseif ($winnerCount > 1) {
                $this->addFinding($findings, 24, sprintf('Match FINISHED avec %d gagnants.', $winnerCount), 'HIGH');
            }
            if ($submittedBy === null) {
                $this->addFinding($findings, 6, 'Resultat final sans utilisateur de soumission renseigne.', 'LOW');
            }
        }

        if ($status === 'CANCELLED' && ($scoresPresent > 0 || $winnerCount > 0)) {
            $this->addFinding($findings, 16, 'Match CANCELLED avec scores ou gagnant saisis.', 'MEDIUM');
        }

        if (in_array($status, ['SCHEDULED', 'ONGOING'], true) && $winnerCount > 0) {
            $this->addFinding($findings, 14, sprintf('Statut %s avec gagnant deja renseigne.', $status), 'MEDIUM');
        }

        if ($scoresPresent > 0 && $teamCount >= 2 && $winnerCount === 1 && count($topScoreTeams) > 1) {
            $this->addFinding($findings, 14, 'Egalite de score detectee avec un seul gagnant.', 'MEDIUM');
        }

        if ($scoresPresent > 0 && $teamCount >= 2 && $winnerCount === 0 && count($topScoreTeams) === $teamCount && $status === 'FINISHED') {
            $this->addFinding($findings, 18, 'Scores a egalite sur match FINISHED sans resolution du vainqueur.', 'HIGH');
        }

        if (is_int($bestOf) && $bestOf > 0 && $maxScore !== null) {
            $winsNeeded = (int) floor($bestOf / 2) + 1;
            if ($maxScore > $winsNeeded) {
                $this->addFinding($findings, 10, sprintf('Score (%d) superieur au maximum attendu pour BO%d (%d).', $maxScore, $bestOf, $winsNeeded), 'MEDIUM');
            }
            if ($status === 'FINISHED' && $winnerCount === 1 && $maxScore < $winsNeeded && $scoresPresent >= 2) {
                $this->addFinding($findings, 8, sprintf('Winner marque mais score max inferieur au seuil BO%d (%d).', $bestOf, $winsNeeded), 'LOW');
            }
        }

        usort($findings, static function (array $a, array $b): int {
            if ($a['penalty'] === $b['penalty']) {
                return strcmp($b['severity'], $a['severity']);
            }

            return $b['penalty'] <=> $a['penalty'];
        });

        $penaltyPoints = 0;
        $highCount = 0;
        $mediumCount = 0;
        foreach ($findings as $finding) {
            $penaltyPoints += (int) $finding['penalty'];
            if ($finding['severity'] === 'HIGH') {
                ++$highCount;
            } elseif ($finding['severity'] === 'MEDIUM') {
                ++$mediumCount;
            }
        }

        $integrityScore = max(0, min(100, 100 - $penaltyPoints));
        $anomalyRisk = 'LOW';
        if ($integrityScore < 60 || $highCount > 0) {
            $anomalyRisk = 'HIGH';
        } elseif ($integrityScore < 82 || $mediumCount >= 2) {
            $anomalyRisk = 'MEDIUM';
        }

        $winnerNames = [];
        foreach ($participants as $participant) {
            if ($participant['isWinner'] === true) {
                $winnerNames[] = (string) $participant['teamName'];
            }
        }

        $scoreboardParts = [];
        foreach ($participants as $participant) {
            $label = (string) $participant['teamName'];
            if (is_int($participant['score'])) {
                $label .= ' (' . $participant['score'] . ')';
            }
            if ($participant['isWinner'] === true) {
                $label .= ' W';
            }
            $scoreboardParts[] = $label;
        }

        $scoreboardSummary = $scoreboardParts !== [] ? implode(' vs ', $scoreboardParts) : 'Aucun participant renseigne';
        $localSummary = $this->buildLocalSummary($match, $participants, $winnerNames, $anomalyRisk, $integrityScore);

        $disputeSignals = [];
        foreach ($findings as $finding) {
            if (str_contains($finding['reason'], 'gagnant')
                || str_contains($finding['reason'], 'score')
                || str_contains($finding['reason'], 'CANCELLED')
                || str_contains($finding['reason'], 'FINISHED')
            ) {
                $disputeSignals[] = $finding['reason'];
            }

            if (count($disputeSignals) >= 4) {
                break;
            }
        }

        if ($disputeSignals === []) {
            $disputeSignals[] = 'Aucun signal majeur de litige detecte dans les scores/winners.';
        }

        $result = [
            'integrityScore' => $integrityScore,
            'anomalyRisk' => $anomalyRisk,
            'issuesCount' => count($findings),
            'penaltyPoints' => $penaltyPoints,
            'findings' => array_map(static fn (array $f): string => (string) $f['reason'], $findings),
            'status' => $status,
            'teamCount' => $teamCount,
            'winnerCount' => $winnerCount,
            'scoresPresentCount' => $scoresPresent,
            'winnerTeamNames' => $winnerNames,
            'scoreboardSummary' => $scoreboardSummary,
            'localSummary' => $localSummary,
            'hasResultData' => $scoresPresent > 0 || $winnerCount > 0,
            'disputeSignals' => $disputeSignals,
            'participants' => $participants,
        ];

        return $result;
    }

    /**
     * @param iterable<MatchTeam> $matchTeams
     * @return array<string, mixed>
     */
    public function analyzeMatchWithAssistant(TournamentMatch $match, iterable $matchTeams): array
    {
        $analysis = $this->analyzeMatchLocal($match, $matchTeams);

        if (!($this->ollamaClientService instanceof OllamaClientService)) {
            $analysis['ollamaAssistant'] = $this->disabledAssistantPayload('Ollama client service unavailable.');

            return $analysis;
        }

        $response = $this->ollamaClientService->chatJson(
            $this->buildOllamaSystemPrompt(),
            $this->buildOllamaUserPrompt($match, $analysis)
        );

        $assistant = [
            'status' => (string) ($response['status'] ?? 'ERROR'),
            'model' => (string) ($response['model'] ?? $this->ollamaClientService->getChatModel()),
            'baseUrl' => (string) ($response['baseUrl'] ?? $this->ollamaClientService->getBaseUrl()),
            'latencyMs' => (int) ($response['latencyMs'] ?? 0),
            'matchSummary' => null,
            'anomalySummary' => null,
            'disputeHelper' => null,
            'disputeDecisionHint' => null,
            'disputeChecklist' => [],
            'adminActions' => [],
            'error' => null,
        ];

        if (($response['ok'] ?? false) !== true) {
            $assistant['error'] = (string) ($response['error'] ?? 'Ollama request failed.');
            $analysis['ollamaAssistant'] = $assistant;

            return $analysis;
        }

        $data = $response['data'] ?? null;
        if (!is_array($data)) {
            $assistant['status'] = 'ERROR';
            $assistant['error'] = 'Ollama returned empty JSON payload.';
            $analysis['ollamaAssistant'] = $assistant;

            return $analysis;
        }

        $assistant['matchSummary'] = $this->sanitizeText($data['matchSummary'] ?? null, 380);
        $assistant['anomalySummary'] = $this->sanitizeText($data['anomalySummary'] ?? null, 380);
        $assistant['disputeHelper'] = $this->sanitizeText($data['disputeHelper'] ?? null, 480);
        $assistant['disputeDecisionHint'] = $this->sanitizeEnum(
            $data['disputeDecisionHint'] ?? null,
            ['NO_ACTION', 'VALIDATE_RESULT', 'REQUEST_PROOF', 'ESCALATE']
        );
        $assistant['disputeChecklist'] = $this->sanitizeList($data['disputeChecklist'] ?? null, 6, 160);
        $assistant['adminActions'] = $this->sanitizeList($data['adminActions'] ?? null, 6, 160);

        if ($assistant['matchSummary'] === null && $assistant['disputeChecklist'] === [] && $assistant['adminActions'] === []) {
            $assistant['status'] = 'ERROR';
            $assistant['error'] = 'Ollama JSON payload missing expected fields.';
        }

        $analysis['ollamaAssistant'] = $assistant;

        return $analysis;
    }

    /**
     * @return array<string, mixed>
     */
    private function disabledAssistantPayload(string $error): array
    {
        return [
            'status' => 'DISABLED',
            'model' => null,
            'baseUrl' => null,
            'latencyMs' => 0,
            'matchSummary' => null,
            'anomalySummary' => null,
            'disputeHelper' => null,
            'disputeDecisionHint' => null,
            'disputeChecklist' => [],
            'adminActions' => [],
            'error' => $error,
        ];
    }

    /**
     * @param list<array{teamId:?int, teamName:string, score:?int, isWinner:bool}> $participants
     * @param list<string> $winnerNames
     */
    private function buildLocalSummary(
        TournamentMatch $match,
        array $participants,
        array $winnerNames,
        string $anomalyRisk,
        int $integrityScore,
    ): string {
        $status = strtoupper((string) ($match->getStatus() ?? 'SCHEDULED'));
        $teamNames = array_map(static fn (array $p): string => $p['teamName'], $participants);
        $label = $teamNames !== [] ? implode(' vs ', $teamNames) : 'Match';

        $parts = [$label];
        $parts[] = 'status ' . $status;
        if ($match->getRoundName()) {
            $parts[] = 'round ' . $match->getRoundName();
        }
        if ($match->getBestOf()) {
            $parts[] = 'BO' . (int) $match->getBestOf();
        }
        if ($winnerNames !== []) {
            $parts[] = 'winner ' . implode(', ', $winnerNames);
        }
        $parts[] = sprintf('integrite %d/100 (%s)', $integrityScore, $anomalyRisk);

        return implode(' | ', $parts) . '.';
    }

    /**
     * @param list<array{penalty:int,severity:'LOW'|'MEDIUM'|'HIGH',reason:string}> $findings
     */
    private function addFinding(array &$findings, int $penalty, string $reason, string $severity): void
    {
        $normalizedPenalty = max(0, $penalty);
        if ($normalizedPenalty === 0) {
            return;
        }

        /** @var 'LOW'|'MEDIUM'|'HIGH' $severityValue */
        $severityValue = in_array($severity, ['LOW', 'MEDIUM', 'HIGH'], true) ? $severity : 'MEDIUM';

        $findings[] = [
            'penalty' => $normalizedPenalty,
            'severity' => $severityValue,
            'reason' => trim($reason),
        ];
    }

    private function buildOllamaSystemPrompt(): string
    {
        return implode("\n", [
            'You are an esports admin assistant analyzing a single match.',
            'Return ONLY a JSON object (no markdown).',
            'Write user-facing text in French (ASCII only, no accents required).',
            'Use the local analysis as source of truth. Do not invent missing data.',
            'JSON shape:',
            '{',
            '  "matchSummary": "short recap of the match for admin",',
            '  "anomalySummary": "short explanation of anomalies and risk",',
            '  "disputeHelper": "neutral guidance if a score dispute happens",',
            '  "disputeDecisionHint": "NO_ACTION|VALIDATE_RESULT|REQUEST_PROOF|ESCALATE",',
            '  "disputeChecklist": ["item1", "item2"],',
            '  "adminActions": ["action1", "action2"]',
            '}',
            'Rules:',
            '- If local anomalyRisk is HIGH, prefer REQUEST_PROOF or ESCALATE.',
            '- If local anomalyRisk is LOW and result is coherent, prefer VALIDATE_RESULT or NO_ACTION.',
            '- Keep checklist and actions concrete and short (max 6 each).',
        ]);
    }

    /**
     * @param array<string, mixed> $analysis
     */
    private function buildOllamaUserPrompt(TournamentMatch $match, array $analysis): string
    {
        $payload = [
            'match' => [
                'id' => (int) ($match->getMatchId() ?? 0),
                'status' => (string) ($match->getStatus() ?? 'SCHEDULED'),
                'roundName' => (string) ($match->getRoundName() ?? ''),
                'bestOf' => (int) ($match->getBestOf() ?? 0),
                'scheduledAt' => $match->getScheduledAt()?->format('Y-m-d H:i:s'),
                'tournament' => (string) ($match->getTournamentId()?->getTitle() ?? ''),
                'game' => (string) ($match->getTournamentId()?->getGameId()?->getName() ?? ''),
                'organizer' => (string) ($match->getTournamentId()?->getOrganizerUserId()?->getUsername() ?? ''),
                'resultSubmittedBy' => (string) ($match->getResultSubmittedByUserId()?->getUsername() ?? ''),
            ],
            'localAnalysis' => [
                'integrityScore' => (int) ($analysis['integrityScore'] ?? 0),
                'anomalyRisk' => (string) ($analysis['anomalyRisk'] ?? 'LOW'),
                'issuesCount' => (int) ($analysis['issuesCount'] ?? 0),
                'penaltyPoints' => (int) ($analysis['penaltyPoints'] ?? 0),
                'scoreboardSummary' => (string) ($analysis['scoreboardSummary'] ?? ''),
                'localSummary' => (string) ($analysis['localSummary'] ?? ''),
                'winnerTeamNames' => array_values(array_map('strval', is_array($analysis['winnerTeamNames'] ?? null) ? $analysis['winnerTeamNames'] : [])),
                'disputeSignals' => array_values(array_slice(
                    array_map('strval', is_array($analysis['disputeSignals'] ?? null) ? $analysis['disputeSignals'] : []),
                    0,
                    6
                )),
                'findings' => array_values(array_slice(
                    array_map('strval', is_array($analysis['findings'] ?? null) ? $analysis['findings'] : []),
                    0,
                    10
                )),
                'participants' => $analysis['participants'] ?? [],
            ],
        ];

        $json = json_encode($payload, JSON_UNESCAPED_SLASHES);
        if (!is_string($json) || $json === '') {
            $json = '{}';
        }

        return "Analyze match integrity and dispute readiness. Return JSON only.\n" . $json;
    }

    private function sanitizeText(mixed $value, int $maxChars): ?string
    {
        if (!is_scalar($value)) {
            return null;
        }

        $normalized = trim((string) preg_replace('/\s+/u', ' ', (string) $value));
        if ($normalized === '') {
            return null;
        }

        return mb_substr($normalized, 0, $maxChars);
    }

    /**
     * @param list<string> $allowed
     */
    private function sanitizeEnum(mixed $value, array $allowed): ?string
    {
        if (!is_scalar($value)) {
            return null;
        }

        $normalized = strtoupper(trim((string) $value));

        return in_array($normalized, $allowed, true) ? $normalized : null;
    }

    /**
     * @return list<string>
     */
    private function sanitizeList(mixed $value, int $maxItems, int $maxCharsPerItem): array
    {
        if (!is_array($value)) {
            return [];
        }

        $items = [];
        foreach ($value as $item) {
            if (!is_scalar($item)) {
                continue;
            }

            $normalized = trim((string) preg_replace('/\s+/u', ' ', (string) $item));
            if ($normalized === '') {
                continue;
            }

            $items[] = mb_substr($normalized, 0, $maxCharsPerItem);
            if (count($items) >= $maxItems) {
                break;
            }
        }

        return $items;
    }
}
