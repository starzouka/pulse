<?php

declare(strict_types=1);

namespace App\Service\Organizer;

use App\Entity\Tournament;
use App\Entity\TournamentRequest;
use App\Entity\User;
use App\Repository\TournamentRepository;

final class OrganizerAiAssistantService
{
    /** @var array<string, list<Tournament>> */
    private array $duplicateCandidatesCache = [];

    public function __construct(
        private readonly TournamentRepository $tournamentRepository,
    ) {
    }

    /**
     * Score IA "explicable" pour une demande persistée (admin / post-submit).
     *
     * @return array{
     *   score:int,
     *   riskLevel:'LOW'|'MEDIUM'|'HIGH',
     *   reasons:list<string>,
     *   penaltyPoints:int,
     *   issuesCount:int,
     *   hasProbableDuplicate:bool
     * }
     */
    public function evaluateTournamentRequestEntity(TournamentRequest $request): array
    {
        $input = [
            'title' => (string) ($request->getTitle() ?? ''),
            'description' => (string) ($request->getDescription() ?? ''),
            'rules' => (string) ($request->getRules() ?? ''),
            'startDate' => $request->getStartDate(),
            'endDate' => $request->getEndDate(),
            'registrationDeadline' => $request->getRegistrationDeadline(),
            'maxTeams' => (int) ($request->getMaxTeams() ?? 0),
            'format' => (string) ($request->getFormat() ?? ''),
            'registrationMode' => (string) ($request->getRegistrationMode() ?? ''),
            'prizePool' => $this->parseFloat((string) ($request->getPrizePool() ?? '')),
            'prizePoolRaw' => (string) ($request->getPrizePool() ?? ''),
            'prizeDescription' => (string) ($request->getPrizeDescription() ?? ''),
            'organizerUserId' => $request->getOrganizerUserId()?->getUserId(),
            'gameId' => $request->getGameId()?->getGameId(),
            'status' => (string) ($request->getStatus() ?? ''),
        ];

        return $this->evaluateNormalizedInput($input);
    }

    /**
     * Score IA "draft" depuis le payload brut du formulaire organizer-request-create.
     *
     * @param array<string, mixed> $payload
     * @return array{
     *   score:int,
     *   riskLevel:'LOW'|'MEDIUM'|'HIGH',
     *   reasons:list<string>,
     *   penaltyPoints:int,
     *   issuesCount:int,
     *   hasProbableDuplicate:bool
     * }
     */
    public function evaluateTournamentRequestDraft(array $payload, ?User $organizerUser = null): array
    {
        $gameId = $this->parseInt($payload['gameId'] ?? null);
        $organizerUserId = $organizerUser?->getUserId();

        $input = [
            'title' => $this->toString($payload['title'] ?? null),
            'description' => $this->toString($payload['description'] ?? null),
            'rules' => $this->toString($payload['rules'] ?? null),
            'startDate' => $this->parseDate($payload['startDate'] ?? null),
            'endDate' => $this->parseDate($payload['endDate'] ?? null),
            'registrationDeadline' => $this->parseDate($payload['registrationDeadline'] ?? null),
            'maxTeams' => $this->parseInt($payload['maxTeams'] ?? null) ?? 0,
            'format' => strtoupper($this->toString($payload['format'] ?? null)),
            'registrationMode' => strtoupper($this->toString($payload['registrationMode'] ?? null)),
            'prizePool' => $this->parseFloat($this->toString($payload['prizePool'] ?? null)),
            'prizePoolRaw' => $this->toString($payload['prizePool'] ?? null),
            'prizeDescription' => $this->toString($payload['prizeDescription'] ?? null),
            'organizerUserId' => $organizerUserId,
            'gameId' => $gameId,
            'status' => 'PENDING',
        ];

        return $this->evaluateNormalizedInput($input);
    }

    /**
     * @param array{
     *   title:string,
     *   description:string,
     *   rules:string,
     *   startDate:?\DateTimeInterface,
     *   endDate:?\DateTimeInterface,
     *   registrationDeadline:?\DateTimeInterface,
     *   maxTeams:int,
     *   format:string,
     *   registrationMode:string,
     *   prizePool:?float,
     *   prizePoolRaw:string,
     *   prizeDescription:string,
     *   organizerUserId:?int,
     *   gameId:?int,
     *   status:string
     * } $input
     * @return array{
     *   score:int,
     *   riskLevel:'LOW'|'MEDIUM'|'HIGH',
     *   reasons:list<string>,
     *   penaltyPoints:int,
     *   issuesCount:int,
     *   hasProbableDuplicate:bool
     * }
     */
    private function evaluateNormalizedInput(array $input): array
    {
        /** @var list<array{penalty:int, severity:'LOW'|'MEDIUM'|'HIGH', reason:string}> $findings */
        $findings = [];

        $title = trim($input['title']);
        $description = trim($input['description']);
        $rules = trim($input['rules']);
        $prizeDescription = trim($input['prizeDescription']);
        $startDate = $input['startDate'];
        $endDate = $input['endDate'];
        $registrationDeadline = $input['registrationDeadline'];
        $maxTeams = $input['maxTeams'];
        $prizePool = $input['prizePool'];
        $status = strtoupper(trim($input['status']));

        if ($title === '') {
            $this->addFinding($findings, 12, 'Titre manquant ou vide.', 'MEDIUM');
        } elseif (mb_strlen($title) < 4) {
            $this->addFinding($findings, 6, 'Titre tres court: risque de demande peu descriptive.', 'LOW');
        }

        $descriptionWords = $this->countWords($description);
        $rulesWords = $this->countWords($rules);
        $combinedWords = $descriptionWords + $rulesWords;

        if ($description === '' || $descriptionWords < 8) {
            $this->addFinding($findings, 14, 'Description trop courte ou trop vide.', 'MEDIUM');
        } elseif ($descriptionWords < 18) {
            $this->addFinding($findings, 7, 'Description un peu legere: ajouter plus de contexte.', 'LOW');
        }

        if ($rules === '' || $rulesWords < 8) {
            $this->addFinding($findings, 14, 'Regles trop courtes ou absentes.', 'MEDIUM');
        } elseif ($rulesWords < 18) {
            $this->addFinding($findings, 7, 'Regles peu detaillees: risque d ambiguite pour les equipes.', 'LOW');
        }

        if ($combinedWords > 0 && $combinedWords < 25) {
            $this->addFinding($findings, 8, 'Description + regles globalement insuffisantes pour une validation rapide.', 'MEDIUM');
        }

        if (!$startDate instanceof \DateTimeInterface) {
            $this->addFinding($findings, 12, 'Date de debut manquante ou invalide.', 'MEDIUM');
        }

        if (!$endDate instanceof \DateTimeInterface) {
            $this->addFinding($findings, 12, 'Date de fin manquante ou invalide.', 'MEDIUM');
        }

        if ($startDate instanceof \DateTimeInterface && $endDate instanceof \DateTimeInterface) {
            $start = \DateTimeImmutable::createFromInterface($startDate)->setTime(0, 0, 0);
            $end = \DateTimeImmutable::createFromInterface($endDate)->setTime(0, 0, 0);

            if ($end < $start) {
                $this->addFinding($findings, 35, 'Dates incoherentes: la fin est avant le debut.', 'HIGH');
            } else {
                $durationDays = (int) $start->diff($end)->days + 1;
                if ($durationDays > 365) {
                    $this->addFinding($findings, 28, sprintf('Duree tres elevee (%d jours): demande atypique.', $durationDays), 'HIGH');
                } elseif ($durationDays > 90) {
                    $this->addFinding($findings, 16, sprintf('Duree longue (%d jours): verifier la planification.', $durationDays), 'MEDIUM');
                } elseif ($durationDays > 30) {
                    $this->addFinding($findings, 8, sprintf('Duree relativement longue (%d jours).', $durationDays), 'LOW');
                }
            }

            if ($registrationDeadline instanceof \DateTimeInterface) {
                $deadline = \DateTimeImmutable::createFromInterface($registrationDeadline)->setTime(0, 0, 0);
                if ($deadline > $start) {
                    $this->addFinding($findings, 22, "Date limite d'inscription apres la date de debut.", 'HIGH');
                } elseif ($deadline > $end) {
                    $this->addFinding($findings, 30, "Date limite d'inscription apres la fin du tournoi.", 'HIGH');
                } else {
                    $gapDays = (int) $deadline->diff($start)->days;
                    if ($gapDays > 180) {
                        $this->addFinding($findings, 6, sprintf("Date limite d'inscription tres en amont (%d jours).", $gapDays), 'LOW');
                    }
                }
            }
        }

        if ($maxTeams <= 0) {
            $this->addFinding($findings, 12, 'maxTeams manquant ou invalide.', 'MEDIUM');
        } elseif ($maxTeams < 4) {
            $this->addFinding($findings, 16, sprintf('maxTeams tres faible (%d): difficilement viable pour un tournoi.', $maxTeams), 'MEDIUM');
        } elseif ($maxTeams > 512) {
            $this->addFinding($findings, 30, sprintf('maxTeams tres eleve (%d): valeur potentiellement irrealiste.', $maxTeams), 'HIGH');
        } elseif ($maxTeams > 256) {
            $this->addFinding($findings, 20, sprintf('maxTeams eleve (%d): verifier la capacite d organisation.', $maxTeams), 'HIGH');
        } elseif ($maxTeams > 128) {
            $this->addFinding($findings, 12, sprintf('maxTeams assez eleve (%d): verifier la logistique.', $maxTeams), 'MEDIUM');
        } elseif ($maxTeams > 0 && !in_array($maxTeams, [4, 8, 16, 32, 64, 128], true)) {
            $this->addFinding($findings, 4, sprintf('maxTeams atypique (%d): verifier le format de bracket.', $maxTeams), 'LOW');
        }

        $prizePoolRaw = trim($input['prizePoolRaw']);
        if ($prizePool === null && $prizePoolRaw !== '') {
            $this->addFinding($findings, 14, 'Prize pool invalide ou non numerique.', 'MEDIUM');
        } elseif ($prizePool !== null) {
            if ($prizePool < 0) {
                $this->addFinding($findings, 20, 'Prize pool negatif: valeur invalide.', 'HIGH');
            } elseif ($prizePool >= 500000) {
                $this->addFinding($findings, 30, 'Prize pool tres eleve: valeur suspecte, verifier une erreur de saisie.', 'HIGH');
            } elseif ($prizePool >= 100000) {
                $this->addFinding($findings, 18, 'Prize pool eleve: verification admin recommandee.', 'MEDIUM');
            } elseif ($prizePool >= 25000) {
                $this->addFinding($findings, 8, 'Prize pool relativement eleve: ajouter du detail sur les recompenses.', 'LOW');
            }

            if ($prizePool > 0 && $maxTeams > 0) {
                $prizePerTeam = $prizePool / max(1, $maxTeams);
                if ($prizePerTeam >= 50000) {
                    $this->addFinding($findings, 22, 'Prize pool par equipe extremement eleve: possible anomalie.', 'HIGH');
                } elseif ($prizePerTeam >= 10000) {
                    $this->addFinding($findings, 10, 'Prize pool par equipe eleve: verifier le montant saisi.', 'MEDIUM');
                }
            }

            if ($prizePool > 0 && $this->countWords($prizeDescription) < 5) {
                $this->addFinding($findings, 8, 'Prize description trop vague alors que le prize pool est non nul.', 'LOW');
            }

            if ($prizePool == 0.0 && $maxTeams >= 64) {
                $this->addFinding($findings, 6, 'Prize pool nul pour un tournoi volumineux: valeur a confirmer.', 'LOW');
            }
        }

        $duplicateEvaluated = false;
        $hasProbableDuplicate = false;
        if ($status !== 'ACCEPTED') {
            $duplicateEvaluated = true;
            $duplicate = $this->detectProbableDuplicate(
                $input['organizerUserId'],
                $input['gameId'],
                $title,
                $startDate
            );

            if ($duplicate !== null) {
                $hasProbableDuplicate = true;
                $duplicateTitle = (string) ($duplicate['title'] ?? 'tournoi');
                $duplicateId = (int) ($duplicate['id'] ?? 0);
                $duplicateStatus = (string) ($duplicate['status'] ?? '-');
                $duplicateStart = (string) ($duplicate['startDate'] ?? '-');
                $similarity = (int) ($duplicate['similarity'] ?? 0);
                $dateGap = $duplicate['dateGapDays'];

                $reason = sprintf(
                    'Doublon probable avec le tournoi #%d ("%s") [%s], similarite titre %d%%',
                    $duplicateId,
                    $duplicateTitle,
                    $duplicateStatus,
                    $similarity
                );
                if (is_int($dateGap)) {
                    $reason .= sprintf(', ecart date %d jour(s)', $dateGap);
                }
                $reason .= sprintf(' (start: %s).', $duplicateStart);

                $penalty = (int) ($duplicate['penalty'] ?? 18);
                $severity = (string) ($duplicate['severity'] ?? 'MEDIUM');
                /** @var 'LOW'|'MEDIUM'|'HIGH' $severityNormalized */
                $severityNormalized = in_array($severity, ['LOW', 'MEDIUM', 'HIGH'], true) ? $severity : 'MEDIUM';
                $this->addFinding($findings, $penalty, $reason, $severityNormalized);
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
            $penaltyPoints += $finding['penalty'];
            if ($finding['severity'] === 'HIGH') {
                ++$highCount;
            } elseif ($finding['severity'] === 'MEDIUM') {
                ++$mediumCount;
            }
        }

        $score = max(0, min(100, 100 - $penaltyPoints));

        $riskLevel = 'LOW';
        if ($score < 55 || $highCount >= 1) {
            $riskLevel = 'HIGH';
        } elseif ($score < 80 || $mediumCount >= 2 || $highCount > 0) {
            $riskLevel = 'MEDIUM';
        }

        $reasons = array_map(
            static fn (array $finding): string => $finding['reason'],
            $findings
        );

        if ($reasons === []) {
            $reasons[] = 'Aucun signal critique detecte: demande coherente selon les regles IA.';
        } elseif ($duplicateEvaluated && !$hasProbableDuplicate && $score >= 80) {
            $reasons[] = 'Aucun doublon probable detecte avec les tournois existants du meme organisateur/jeu.';
        }

        return [
            'score' => (int) $score,
            'riskLevel' => $riskLevel,
            'reasons' => $reasons,
            'penaltyPoints' => (int) $penaltyPoints,
            'issuesCount' => count($findings),
            'hasProbableDuplicate' => $hasProbableDuplicate,
        ];
    }

    /**
     * @return array{id:int,title:string,status:string,startDate:string,similarity:int,dateGapDays:?int,penalty:int,severity:'LOW'|'MEDIUM'|'HIGH'}|null
     */
    private function detectProbableDuplicate(
        ?int $organizerUserId,
        ?int $gameId,
        string $title,
        ?\DateTimeInterface $startDate,
    ): ?array {
        if ($organizerUserId === null || $organizerUserId <= 0) {
            return null;
        }

        if ($gameId === null || $gameId <= 0) {
            return null;
        }

        $normalizedTitle = $this->normalizeTitle($title);
        if ($normalizedTitle === '') {
            return null;
        }

        $candidates = $this->loadDuplicateCandidates($organizerUserId, $gameId);
        if ($candidates === []) {
            return null;
        }

        $best = null;
        $bestScore = -1;

        foreach ($candidates as $candidate) {
            $candidateId = $candidate->getTournamentId();
            if (!is_int($candidateId) || $candidateId <= 0) {
                continue;
            }

            $candidateTitle = trim((string) ($candidate->getTitle() ?? ''));
            $candidateNormalized = $this->normalizeTitle($candidateTitle);
            if ($candidateNormalized === '') {
                continue;
            }

            $similarity = $this->titleSimilarityPercent($normalizedTitle, $candidateNormalized);
            $isExact = $candidateNormalized === $normalizedTitle;
            $contains = str_contains($candidateNormalized, $normalizedTitle) || str_contains($normalizedTitle, $candidateNormalized);

            $dateGapDays = null;
            if ($startDate instanceof \DateTimeInterface && $candidate->getStartDate() instanceof \DateTimeInterface) {
                $a = \DateTimeImmutable::createFromInterface($startDate)->setTime(0, 0, 0);
                $b = \DateTimeImmutable::createFromInterface($candidate->getStartDate())->setTime(0, 0, 0);
                $dateGapDays = (int) abs((int) $a->diff($b)->format('%r%a'));
            }

            $dupScore = 0;
            if ($isExact) {
                $dupScore += 55;
            }
            if ($contains) {
                $dupScore += 15;
            }
            $dupScore += (int) floor($similarity * 0.35);

            if (is_int($dateGapDays)) {
                if ($dateGapDays <= 1) {
                    $dupScore += 30;
                } elseif ($dateGapDays <= 7) {
                    $dupScore += 18;
                } elseif ($dateGapDays <= 14) {
                    $dupScore += 10;
                } elseif ($dateGapDays <= 30) {
                    $dupScore += 4;
                }
            }

            if ($dupScore > $bestScore) {
                $bestScore = $dupScore;

                $penalty = 0;
                $severity = 'LOW';
                if ($dupScore >= 95 || ($isExact && (is_int($dateGapDays) && $dateGapDays <= 7))) {
                    $penalty = 32;
                    $severity = 'HIGH';
                } elseif ($dupScore >= 75) {
                    $penalty = 20;
                    $severity = 'MEDIUM';
                } elseif ($dupScore >= 60) {
                    $penalty = 10;
                    $severity = 'LOW';
                }

                $best = [
                    'id' => $candidateId,
                    'title' => $candidateTitle,
                    'status' => (string) ($candidate->getStatus() ?? '-'),
                    'startDate' => $candidate->getStartDate()?->format('d/m/Y') ?? '-',
                    'similarity' => $similarity,
                    'dateGapDays' => $dateGapDays,
                    'penalty' => $penalty,
                    'severity' => $severity,
                    'dupScore' => $dupScore,
                ];
            }
        }

        if (!is_array($best)) {
            return null;
        }

        if ((int) ($best['penalty'] ?? 0) <= 0) {
            return null;
        }

        return [
            'id' => (int) $best['id'],
            'title' => (string) $best['title'],
            'status' => (string) $best['status'],
            'startDate' => (string) $best['startDate'],
            'similarity' => (int) $best['similarity'],
            'dateGapDays' => is_int($best['dateGapDays']) ? $best['dateGapDays'] : null,
            'penalty' => (int) $best['penalty'],
            'severity' => (string) $best['severity'],
        ];
    }

    /**
     * @return list<Tournament>
     */
    private function loadDuplicateCandidates(int $organizerUserId, int $gameId): array
    {
        $cacheKey = $organizerUserId . ':' . $gameId;
        if (array_key_exists($cacheKey, $this->duplicateCandidatesCache)) {
            return $this->duplicateCandidatesCache[$cacheKey];
        }

        $this->duplicateCandidatesCache[$cacheKey] = $this->tournamentRepository
            ->findRecentByOrganizerAndGame($organizerUserId, $gameId, 30);

        return $this->duplicateCandidatesCache[$cacheKey];
    }

    /**
     * @param list<array{penalty:int, severity:'LOW'|'MEDIUM'|'HIGH', reason:string}> $findings
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

    private function countWords(string $value): int
    {
        $normalized = trim((string) preg_replace('/\s+/u', ' ', $value));
        if ($normalized === '') {
            return 0;
        }

        $parts = preg_split('/\s+/u', $normalized);
        if (!is_array($parts)) {
            return 0;
        }

        $count = 0;
        foreach ($parts as $part) {
            if (preg_match('/[\pL\pN]/u', (string) $part) === 1) {
                ++$count;
            }
        }

        return $count;
    }

    private function normalizeTitle(string $value): string
    {
        $normalized = mb_strtolower(trim($value));
        if ($normalized === '') {
            return '';
        }

        $normalized = (string) preg_replace('/[^\pL\pN]+/u', ' ', $normalized);
        $normalized = (string) preg_replace('/\s+/u', ' ', $normalized);

        return trim($normalized);
    }

    private function titleSimilarityPercent(string $a, string $b): int
    {
        if ($a === '' || $b === '') {
            return 0;
        }

        if ($a === $b) {
            return 100;
        }

        $tokensA = array_values(array_filter(explode(' ', $a), static fn (string $t): bool => $t !== ''));
        $tokensB = array_values(array_filter(explode(' ', $b), static fn (string $t): bool => $t !== ''));
        if ($tokensA === [] || $tokensB === []) {
            return 0;
        }

        $setA = array_fill_keys($tokensA, true);
        $setB = array_fill_keys($tokensB, true);

        $intersection = 0;
        foreach ($setA as $token => $_) {
            if (isset($setB[$token])) {
                ++$intersection;
            }
        }

        $union = count($setA) + count($setB) - $intersection;
        if ($union <= 0) {
            return 0;
        }

        $jaccard = (int) round(($intersection / $union) * 100);

        similar_text($a, $b, $similarTextPercent);
        $similarTextScore = (int) round($similarTextPercent);

        return (int) round(($jaccard * 0.55) + ($similarTextScore * 0.45));
    }

    private function parseDate(mixed $value): ?\DateTimeImmutable
    {
        if (!is_scalar($value)) {
            return null;
        }

        $normalized = trim((string) $value);
        if ($normalized === '') {
            return null;
        }

        $parsed = \DateTimeImmutable::createFromFormat('Y-m-d', $normalized);

        return $parsed instanceof \DateTimeImmutable ? $parsed : null;
    }

    private function parseInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $normalized = trim((string) $value);
        if ($normalized === '') {
            return null;
        }

        if (!preg_match('/^-?\d+$/', $normalized)) {
            return null;
        }

        return (int) $normalized;
    }

    private function parseFloat(string $value): ?float
    {
        $normalized = trim($value);
        if ($normalized === '') {
            return null;
        }

        $normalized = str_replace([' ', ','], ['', '.'], $normalized);
        if (!is_numeric($normalized)) {
            return null;
        }

        return (float) $normalized;
    }

    private function toString(mixed $value): string
    {
        if (!is_scalar($value)) {
            return '';
        }

        return trim((string) $value);
    }
}
