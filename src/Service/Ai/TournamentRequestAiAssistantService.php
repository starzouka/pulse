<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\TournamentRequest;

final class TournamentRequestAiAssistantService
{
    public function __construct(
        private readonly OllamaClientService $ollamaClientService,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function analyze(TournamentRequest $tournamentRequest): array
    {
        $snapshot = $this->buildRequestSnapshot($tournamentRequest);
        $heuristics = $this->buildHeuristicReview($snapshot);

        $ollamaStatus = $this->ollamaClientService->status();
        if ($ollamaStatus['ok'] !== true) {
            return [
                'success' => false,
                'source' => 'heuristics_only',
                'model' => $this->ollamaClientService->getDefaultChatModel(),
                'ollama' => $ollamaStatus,
                'heuristics' => $heuristics,
                'request_snapshot' => $snapshot,
                'ai' => null,
                'error' => 'Ollama indisponible. Analyse heuristique seulement.',
            ];
        }

        $messages = [
            [
                'role' => 'system',
                'content' => 'You are an admin assistant for esports tournament moderation. Return ONLY valid JSON with keys: summary, decision_suggestion, confidence, reasons, risk_flags, organizer_improvements, admin_note_draft. decision_suggestion must be ACCEPTED, REFUSED, or MANUAL_REVIEW. reasons/risk_flags/organizer_improvements are arrays of short strings. admin_note_draft is a short French note for admin.',
            ],
            [
                'role' => 'user',
                'content' => $this->buildUserPrompt($snapshot, $heuristics),
            ],
        ];

        $chat = $this->ollamaClientService->chat($messages, null, true);
        if ($chat['ok'] !== true) {
            return [
                'success' => false,
                'source' => 'heuristics_only',
                'model' => $this->ollamaClientService->getDefaultChatModel(),
                'ollama' => $ollamaStatus,
                'heuristics' => $heuristics,
                'request_snapshot' => $snapshot,
                'ai' => null,
                'error' => 'Ollama chat failed: ' . (string) ($chat['error'] ?? 'unknown error'),
            ];
        }

        $rawContent = trim((string) (($chat['data']['message']['content'] ?? '') ?: ''));
        $decoded = $this->decodeJsonObject($rawContent);

        if (!is_array($decoded)) {
            return [
                'success' => false,
                'source' => 'heuristics_plus_raw_llm',
                'model' => (string) (($chat['data']['model'] ?? null) ?: $this->ollamaClientService->getDefaultChatModel()),
                'ollama' => $ollamaStatus,
                'heuristics' => $heuristics,
                'request_snapshot' => $snapshot,
                'ai' => null,
                'raw_ai_text' => $rawContent,
                'error' => 'LLM response was not valid JSON.',
            ];
        }

        return [
            'success' => true,
            'source' => 'heuristics_plus_ollama',
            'model' => (string) (($chat['data']['model'] ?? null) ?: $this->ollamaClientService->getDefaultChatModel()),
            'ollama' => $ollamaStatus,
            'heuristics' => $heuristics,
            'request_snapshot' => $snapshot,
            'ai' => $this->normalizeAiJson($decoded),
            'error' => null,
        ];
    }

    /**
     * @param array<string, mixed> $snapshot
     * @param array<string, mixed> $heuristics
     */
    private function buildUserPrompt(array $snapshot, array $heuristics): string
    {
        $payload = [
            'request' => $snapshot,
            'heuristics' => $heuristics,
            'instructions' => [
                'Explain the likely moderation decision for an admin.',
                'Be cautious: if information is incomplete or suspicious, prefer MANUAL_REVIEW.',
                'Write admin_note_draft in French.',
                'Do not invent facts.',
            ],
        ];

        $json = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        if (!is_string($json)) {
            $json = '{}';
        }

        return $json;
    }

    /**
     * @return array<string, mixed>
     */
    private function buildRequestSnapshot(TournamentRequest $tournamentRequest): array
    {
        $title = $this->normalizeText($tournamentRequest->getTitle());
        $description = $this->normalizeText($tournamentRequest->getDescription());
        $rules = $this->normalizeText($tournamentRequest->getRules());
        $prizeDescription = $this->normalizeText($tournamentRequest->getPrizeDescription());

        return [
            'id' => (int) ($tournamentRequest->getRequestId() ?? 0),
            'status' => (string) ($tournamentRequest->getStatus() ?? 'PENDING'),
            'organizer' => [
                'username' => (string) ($tournamentRequest->getOrganizerUserId()?->getUsername() ?? '-'),
                'email' => (string) ($tournamentRequest->getOrganizerUserId()?->getEmail() ?? '-'),
            ],
            'game' => (string) ($tournamentRequest->getGameId()?->getName() ?? '-'),
            'title' => $title,
            'description' => $description,
            'rules' => $rules,
            'format' => (string) ($tournamentRequest->getFormat() ?? '-'),
            'registration_mode' => (string) ($tournamentRequest->getRegistrationMode() ?? '-'),
            'max_teams' => (int) ($tournamentRequest->getMaxTeams() ?? 0),
            'prize_pool' => (float) ($tournamentRequest->getPrizePool() ?? 0),
            'prize_description' => $prizeDescription,
            'photo_present' => $this->normalizeText($tournamentRequest->getPhotoPath()) !== null,
            'dates' => [
                'start_date' => $tournamentRequest->getStartDate()?->format('Y-m-d'),
                'end_date' => $tournamentRequest->getEndDate()?->format('Y-m-d'),
                'registration_deadline' => $tournamentRequest->getRegistrationDeadline()?->format('Y-m-d'),
                'created_at' => $tournamentRequest->getCreatedAt()?->format('Y-m-d H:i:s'),
            ],
        ];
    }

    /**
     * @param array<string, mixed> $snapshot
     * @return array<string, mixed>
     */
    private function buildHeuristicReview(array $snapshot): array
    {
        $score = 100;
        $flags = [];
        $strengths = [];

        $title = (string) ($snapshot['title'] ?? '');
        $description = (string) ($snapshot['description'] ?? '');
        $rules = (string) ($snapshot['rules'] ?? '');
        $prizePool = (float) ($snapshot['prize_pool'] ?? 0.0);
        $maxTeams = (int) ($snapshot['max_teams'] ?? 0);
        $photoPresent = ($snapshot['photo_present'] ?? false) === true;
        $dates = is_array($snapshot['dates'] ?? null) ? $snapshot['dates'] : [];
        $startDate = isset($dates['start_date']) && is_string($dates['start_date']) ? $dates['start_date'] : null;
        $endDate = isset($dates['end_date']) && is_string($dates['end_date']) ? $dates['end_date'] : null;
        $registrationDeadline = isset($dates['registration_deadline']) && is_string($dates['registration_deadline']) ? $dates['registration_deadline'] : null;

        if (mb_strlen($title) < 6) {
            $score -= 12;
            $flags[] = $this->flag('weak_title', 'medium', 'Title is too short.');
        } else {
            $strengths[] = 'Titre present.';
        }

        if ($description === null || mb_strlen($description) < 80) {
            $score -= 18;
            $flags[] = $this->flag('short_description', 'medium', 'Description is missing or too short.');
        } else {
            $strengths[] = 'Description detaillee.';
        }

        if ($rules === null || mb_strlen($rules) < 60) {
            $score -= 20;
            $flags[] = $this->flag('missing_rules', 'high', 'Rules are missing or too short.');
        } else {
            $strengths[] = 'Regles fournies.';
        }

        if (!$photoPresent) {
            $score -= 5;
            $flags[] = $this->flag('no_photo', 'low', 'No tournament image provided.');
        } else {
            $strengths[] = 'Photo fournie.';
        }

        if ($maxTeams < 2) {
            $score -= 30;
            $flags[] = $this->flag('invalid_max_teams', 'high', 'Max teams is invalid (< 2).');
        } elseif ($maxTeams > 512) {
            $score -= 10;
            $flags[] = $this->flag('very_large_max_teams', 'medium', 'Max teams is unusually high.');
        } else {
            $strengths[] = 'Nombre d equipes plausible.';
        }

        if ($prizePool < 0) {
            $score -= 30;
            $flags[] = $this->flag('negative_prize_pool', 'high', 'Prize pool is negative.');
        } elseif ($prizePool > 100000) {
            $score -= 15;
            $flags[] = $this->flag('high_prize_pool', 'medium', 'Prize pool is unusually high; verify legitimacy.');
        } else {
            $strengths[] = 'Prize pool dans une plage normale.';
        }

        $combinedText = mb_strtolower(trim($title . ' ' . ($description ?? '') . ' ' . ($rules ?? '')));
        foreach (['guaranteed money', 'bitcoin only', 'urgent payment', 'whatsapp only', 'telegram only', 'fake'] as $keyword) {
            if (str_contains($combinedText, $keyword)) {
                $score -= 12;
                $flags[] = $this->flag('suspicious_keyword', 'medium', sprintf('Suspicious wording detected: "%s".', $keyword));
                break;
            }
        }

        if ($startDate !== null && $endDate !== null) {
            $start = \DateTimeImmutable::createFromFormat('Y-m-d', $startDate);
            $end = \DateTimeImmutable::createFromFormat('Y-m-d', $endDate);
            if ($start instanceof \DateTimeImmutable && $end instanceof \DateTimeImmutable) {
                if ($end < $start) {
                    $score -= 40;
                    $flags[] = $this->flag('date_range_invalid', 'high', 'End date is before start date.');
                } else {
                    $durationDays = (int) $start->diff($end)->format('%a');
                    if ($durationDays > 90) {
                        $score -= 8;
                        $flags[] = $this->flag('long_duration', 'low', 'Tournament duration is unusually long (> 90 days).');
                    } else {
                        $strengths[] = 'Plage de dates coherente.';
                    }
                }
            }
        }

        if ($registrationDeadline !== null && $startDate !== null) {
            $deadline = \DateTimeImmutable::createFromFormat('Y-m-d', $registrationDeadline);
            $start = \DateTimeImmutable::createFromFormat('Y-m-d', $startDate);
            if ($deadline instanceof \DateTimeImmutable && $start instanceof \DateTimeImmutable && $deadline > $start) {
                $score -= 12;
                $flags[] = $this->flag('deadline_after_start', 'medium', 'Registration deadline is after start date.');
            }
        }

        $score = max(0, min(100, $score));
        $riskLevel = 'LOW';
        if ($score < 50) {
            $riskLevel = 'HIGH';
        } elseif ($score < 75) {
            $riskLevel = 'MEDIUM';
        }

        return [
            'score' => $score,
            'risk_level' => $riskLevel,
            'flags' => $flags,
            'strengths' => $strengths,
        ];
    }

    /**
     * @return array{code: string, severity: string, message: string}
     */
    private function flag(string $code, string $severity, string $message): array
    {
        return [
            'code' => $code,
            'severity' => $severity,
            'message' => $message,
        ];
    }

    private function normalizeText(?string $value): ?string
    {
        if (!is_string($value)) {
            return null;
        }

        $normalized = trim(preg_replace('/\s+/', ' ', strip_tags($value)) ?? '');

        return $normalized !== '' ? $normalized : null;
    }

    /**
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function normalizeAiJson(array $data): array
    {
        $decision = strtoupper(trim((string) ($data['decision_suggestion'] ?? 'MANUAL_REVIEW')));
        if (!in_array($decision, ['ACCEPTED', 'REFUSED', 'MANUAL_REVIEW'], true)) {
            $decision = 'MANUAL_REVIEW';
        }

        return [
            'summary' => (string) ($data['summary'] ?? ''),
            'decision_suggestion' => $decision,
            'confidence' => (string) ($data['confidence'] ?? 'low'),
            'reasons' => $this->normalizeStringList($data['reasons'] ?? []),
            'risk_flags' => $this->normalizeStringList($data['risk_flags'] ?? []),
            'organizer_improvements' => $this->normalizeStringList($data['organizer_improvements'] ?? []),
            'admin_note_draft' => (string) ($data['admin_note_draft'] ?? ''),
        ];
    }

    /**
     * @param mixed $value
     * @return list<string>
     */
    private function normalizeStringList(mixed $value): array
    {
        if (!is_array($value)) {
            return [];
        }

        $items = [];
        foreach ($value as $item) {
            $text = trim((string) $item);
            if ($text !== '') {
                $items[] = $text;
            }
        }

        return $items;
    }

    /**
     * @return array<string, mixed>|null
     */
    private function decodeJsonObject(string $raw): ?array
    {
        $trimmed = trim($raw);
        if ($trimmed === '') {
            return null;
        }

        $decoded = json_decode($trimmed, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        if (preg_match('/\{.*\}/s', $trimmed, $matches) !== 1) {
            return null;
        }

        $decoded = json_decode((string) $matches[0], true);

        return is_array($decoded) ? $decoded : null;
    }
}
