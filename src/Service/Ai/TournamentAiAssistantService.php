<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\MatchTeam;
use App\Entity\TournamentMatch;
use App\Entity\TournamentRequest;

final class TournamentAiAssistantService
{
    public function __construct(
        private readonly OllamaClientService $ollamaClient,
    ) {
    }

    /**
     * @return array{
     *   provider:string,
     *   base_url:string,
     *   model:string,
     *   ok:bool,
     *   model_installed:bool,
     *   installed_models:list<string>,
     *   message:string
     * }
     */
    public function health(): array
    {
        return $this->ollamaClient->health();
    }

    /**
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'ai'|'fallback',
     *   provider:string,
     *   model:string,
     *   recommendation:'ACCEPT'|'REVIEW'|'REFUSE',
     *   risk_score:int,
     *   confidence:int,
     *   reasoning:string,
     *   flags:list<string>,
     *   admin_note:string,
     *   organizer_suggestions:list<string>
     * }
     */
    public function analyzeTournamentRequest(TournamentRequest $request): array
    {
        $fallback = $this->buildTournamentRequestFallback($request);

        $payload = [
            'request_id' => (int) ($request->getRequestId() ?? 0),
            'title' => (string) ($request->getTitle() ?? ''),
            'description' => (string) ($request->getDescription() ?? ''),
            'rules' => (string) ($request->getRules() ?? ''),
            'game' => (string) ($request->getGameId()?->getName() ?? ''),
            'organizer' => (string) ($request->getOrganizerUserId()?->getUsername() ?? ''),
            'start_date' => $request->getStartDate()?->format('Y-m-d'),
            'end_date' => $request->getEndDate()?->format('Y-m-d'),
            'registration_deadline' => $request->getRegistrationDeadline()?->format('Y-m-d'),
            'max_teams' => (int) ($request->getMaxTeams() ?? 0),
            'format' => (string) ($request->getFormat() ?? ''),
            'registration_mode' => (string) ($request->getRegistrationMode() ?? ''),
            'prize_pool' => (string) ($request->getPrizePool() ?? '0'),
            'prize_description' => (string) ($request->getPrizeDescription() ?? ''),
        ];

        $jsonPayload = (string) json_encode($payload, JSON_UNESCAPED_SLASHES);

        $systemPrompt = "Tu es un assistant admin e-sport. Tu renvoies uniquement du JSON valide, sans texte hors JSON.";
        $userPrompt = <<<PROMPT
Analyse la demande de tournoi suivante.
Retourne exactement un JSON avec cette forme:
{
  "recommendation":"ACCEPT|REVIEW|REFUSE",
  "risk_score":0,
  "confidence":0,
  "reasoning":"...",
  "flags":["..."],
  "admin_note":"...",
  "organizer_suggestions":["..."]
}
Regles:
- risk_score et confidence entre 0 et 100
- flags max 6 elements
- organizer_suggestions max 6 elements
- admin_note et reasoning en francais

Donnees:
{$jsonPayload}
PROMPT;

        $raw = $this->ollamaClient->chatJson($systemPrompt, $userPrompt, null, 0.15, 35);
        if (!is_array($raw)) {
            return $fallback;
        }

        return $this->normalizeTournamentRequestResult($request, $raw, $fallback);
    }

    /**
     * @param list<MatchTeam> $matchTeams
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'ai'|'fallback',
     *   provider:string,
     *   model:string,
     *   summary:string,
     *   highlights:list<string>,
     *   anomalies:list<string>,
     *   mvp_guess:string,
     *   recommended_action:string,
     *   confidence:int
     * }
     */
    public function analyzeMatch(TournamentMatch $match, array $matchTeams): array
    {
        $fallback = $this->buildMatchFallback($match, $matchTeams);

        $participants = [];
        foreach ($matchTeams as $relation) {
            $participants[] = [
                'team' => (string) ($relation->getTeamId()?->getName() ?? '-'),
                'score' => $relation->getScore(),
                'winner' => $relation->isWinner() === true,
            ];
        }

        $payload = [
            'match_id' => (int) ($match->getMatchId() ?? 0),
            'tournament' => (string) ($match->getTournamentId()?->getTitle() ?? ''),
            'game' => (string) ($match->getTournamentId()?->getGameId()?->getName() ?? ''),
            'status' => (string) ($match->getStatus() ?? ''),
            'round_name' => (string) ($match->getRoundName() ?? ''),
            'best_of' => $match->getBestOf(),
            'scheduled_at' => $match->getScheduledAt()?->format('Y-m-d H:i'),
            'participants' => $participants,
        ];

        $jsonPayload = (string) json_encode($payload, JSON_UNESCAPED_SLASHES);

        $systemPrompt = "Tu es un analyste de matchs e-sport. Tu renvoies uniquement du JSON valide, sans texte hors JSON.";
        $userPrompt = <<<PROMPT
Analyse le match et retourne exactement ce JSON:
{
  "summary":"...",
  "highlights":["..."],
  "anomalies":["..."],
  "mvp_guess":"...",
  "recommended_action":"...",
  "confidence":0
}
Regles:
- confidence entre 0 et 100
- highlights max 6
- anomalies max 6
- textes en francais

Donnees:
{$jsonPayload}
PROMPT;

        $raw = $this->ollamaClient->chatJson($systemPrompt, $userPrompt, null, 0.15, 35);
        if (!is_array($raw)) {
            return $fallback;
        }

        return $this->normalizeMatchResult($match, $raw, $fallback);
    }

    /**
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'fallback',
     *   provider:string,
     *   model:string,
     *   recommendation:'ACCEPT'|'REVIEW'|'REFUSE',
     *   risk_score:int,
     *   confidence:int,
     *   reasoning:string,
     *   flags:list<string>,
     *   admin_note:string,
     *   organizer_suggestions:list<string>
     * }
     */
    private function buildTournamentRequestFallback(TournamentRequest $request): array
    {
        $title = trim((string) ($request->getTitle() ?? ''));
        $description = trim((string) ($request->getDescription() ?? ''));
        $rules = trim((string) ($request->getRules() ?? ''));
        $flags = [];
        $suggestions = [];
        $risk = 12;

        if (mb_strlen($title) < 8) {
            $flags[] = 'Titre trop court.';
            $risk += 12;
            $suggestions[] = 'Utiliser un titre plus precis avec edition/saison.';
        }

        if (mb_strlen($description) < 80) {
            $flags[] = 'Description insuffisante.';
            $risk += 16;
            $suggestions[] = 'Ajouter objectifs, public cible et format du tournoi.';
        }

        if (mb_strlen($rules) < 80) {
            $flags[] = 'Regles trop courtes ou manquantes.';
            $risk += 18;
            $suggestions[] = 'Preciser format BO, conditions de victoire, sanctions/no-show.';
        }

        $maxTeams = (int) ($request->getMaxTeams() ?? 0);
        if ($maxTeams < 2 || $maxTeams > 128) {
            $flags[] = 'Nombre max d equipes atypique.';
            $risk += 16;
            $suggestions[] = 'Ajuster maxTeams dans une plage realiste (2-128).';
        }

        $startDate = $request->getStartDate();
        $endDate = $request->getEndDate();
        if ($startDate instanceof \DateTimeInterface && $endDate instanceof \DateTimeInterface && $endDate < $startDate) {
            $flags[] = 'Date de fin avant la date de debut.';
            $risk += 30;
            $suggestions[] = 'Corriger le calendrier du tournoi.';
        }

        $deadline = $request->getRegistrationDeadline();
        if (
            $deadline instanceof \DateTimeInterface
            && $startDate instanceof \DateTimeInterface
            && $deadline > $startDate
        ) {
            $flags[] = 'Deadline inscription apres le debut du tournoi.';
            $risk += 20;
            $suggestions[] = 'Definir une deadline avant la date de debut.';
        }

        $prizePool = (float) str_replace(',', '.', (string) ($request->getPrizePool() ?? '0'));
        if ($prizePool > 10000 && trim((string) ($request->getPrizeDescription() ?? '')) === '') {
            $flags[] = 'Prize pool eleve sans description detaillee.';
            $risk += 8;
            $suggestions[] = 'Ajouter details sur la repartition des recompenses.';
        }

        $risk = max(0, min(100, $risk));
        $recommendation = $risk >= 70 ? 'REFUSE' : ($risk >= 35 ? 'REVIEW' : 'ACCEPT');

        $reasoning = $flags === []
            ? 'Demande globalement coherente selon les regles de validation locales.'
            : 'Points de vigilance detectes: ' . implode(' ', array_slice($flags, 0, 4));

        $adminNote = match ($recommendation) {
            'ACCEPT' => 'Demande complete et coherente. Validation recommandee.',
            'REFUSE' => 'Demande insuffisante/incoherente. Refus recommande avec demande de correction.',
            default => 'Demande a revoir manuellement avant decision finale.',
        };

        if ($suggestions === []) {
            $suggestions[] = 'Aucune correction majeure detectee.';
        }

        return [
            'entity' => 'tournament_request',
            'entity_id' => (int) ($request->getRequestId() ?? 0),
            'source' => 'fallback',
            'provider' => 'ollama',
            'model' => $this->ollamaClient->getModel(),
            'recommendation' => $recommendation,
            'risk_score' => $risk,
            'confidence' => 55,
            'reasoning' => $this->truncate($reasoning, 600),
            'flags' => array_slice($flags, 0, 6),
            'admin_note' => $this->truncate($adminNote, 400),
            'organizer_suggestions' => array_slice(array_values(array_unique($suggestions)), 0, 6),
        ];
    }

    /**
     * @param array<string, mixed> $raw
     * @param array{
     *   entity:string,
     *   entity_id:int,
     *   source:'fallback',
     *   provider:string,
     *   model:string,
     *   recommendation:'ACCEPT'|'REVIEW'|'REFUSE',
     *   risk_score:int,
     *   confidence:int,
     *   reasoning:string,
     *   flags:list<string>,
     *   admin_note:string,
     *   organizer_suggestions:list<string>
     * } $fallback
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'ai'|'fallback',
     *   provider:string,
     *   model:string,
     *   recommendation:'ACCEPT'|'REVIEW'|'REFUSE',
     *   risk_score:int,
     *   confidence:int,
     *   reasoning:string,
     *   flags:list<string>,
     *   admin_note:string,
     *   organizer_suggestions:list<string>
     * }
     */
    private function normalizeTournamentRequestResult(
        TournamentRequest $request,
        array $raw,
        array $fallback,
    ): array {
        $recommendation = strtoupper(trim((string) ($raw['recommendation'] ?? $fallback['recommendation'])));
        if (!in_array($recommendation, ['ACCEPT', 'REVIEW', 'REFUSE'], true)) {
            $recommendation = $fallback['recommendation'];
        }

        $flags = $this->sanitizeStringList($raw['flags'] ?? $fallback['flags'], 6, 140);
        $suggestions = $this->sanitizeStringList(
            $raw['organizer_suggestions'] ?? $fallback['organizer_suggestions'],
            6,
            180
        );

        return [
            'entity' => 'tournament_request',
            'entity_id' => (int) ($request->getRequestId() ?? 0),
            'source' => 'ai',
            'provider' => 'ollama',
            'model' => $this->ollamaClient->getModel(),
            'recommendation' => $recommendation,
            'risk_score' => max(0, min(100, (int) ($raw['risk_score'] ?? $fallback['risk_score']))),
            'confidence' => max(0, min(100, (int) ($raw['confidence'] ?? 70))),
            'reasoning' => $this->truncate(
                trim((string) ($raw['reasoning'] ?? $fallback['reasoning'])),
                700
            ),
            'flags' => $flags !== [] ? $flags : $fallback['flags'],
            'admin_note' => $this->truncate(
                trim((string) ($raw['admin_note'] ?? $fallback['admin_note'])),
                450
            ),
            'organizer_suggestions' => $suggestions !== [] ? $suggestions : $fallback['organizer_suggestions'],
        ];
    }

    /**
     * @param list<MatchTeam> $matchTeams
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'fallback',
     *   provider:string,
     *   model:string,
     *   summary:string,
     *   highlights:list<string>,
     *   anomalies:list<string>,
     *   mvp_guess:string,
     *   recommended_action:string,
     *   confidence:int
     * }
     */
    private function buildMatchFallback(TournamentMatch $match, array $matchTeams): array
    {
        $status = strtoupper((string) ($match->getStatus() ?? 'SCHEDULED'));
        $anomalies = [];
        $highlights = [];
        $winnerCount = 0;
        $knownScores = 0;
        $mvpName = '';
        $bestScore = -1;

        foreach ($matchTeams as $relation) {
            $teamName = (string) ($relation->getTeamId()?->getName() ?? '-');
            $score = $relation->getScore();
            $isWinner = $relation->isWinner() === true;

            if ($score !== null) {
                ++$knownScores;
                if ($score > $bestScore) {
                    $bestScore = $score;
                    $mvpName = $teamName;
                }
            }

            if ($isWinner) {
                ++$winnerCount;
            }
        }

        if ($matchTeams === []) {
            $anomalies[] = 'Aucune equipe participante liee au match.';
        }

        if ($status === 'FINISHED' && $winnerCount === 0) {
            $anomalies[] = 'Match termine sans equipe gagnante.';
        }

        if ($status === 'FINISHED' && $knownScores === 0) {
            $anomalies[] = 'Match termine sans score renseigne.';
        }

        if ($status === 'SCHEDULED' && ($winnerCount > 0 || $knownScores > 0)) {
            $anomalies[] = 'Match planifie avec score/winner deja saisi.';
        }

        if ($winnerCount > 1) {
            $anomalies[] = 'Plusieurs equipes marquees gagnantes.';
        }

        if ($bestScore >= 0) {
            $highlights[] = 'Meilleur score observe: ' . $bestScore . '.';
        }

        if ($winnerCount === 1) {
            $highlights[] = 'Une equipe gagnante est bien identifiee.';
        }

        $summary = sprintf(
            'Match #%d (%s) - statut %s.',
            (int) ($match->getMatchId() ?? 0),
            (string) ($match->getRoundName() ?? 'Round non defini'),
            $status
        );

        $recommendedAction = $anomalies === []
            ? 'Aucune action urgente. Validation manuelle classique.'
            : 'Verifier les incoherences detectees avant cloture du match.';

        return [
            'entity' => 'match',
            'entity_id' => (int) ($match->getMatchId() ?? 0),
            'source' => 'fallback',
            'provider' => 'ollama',
            'model' => $this->ollamaClient->getModel(),
            'summary' => $this->truncate($summary, 350),
            'highlights' => array_slice($highlights, 0, 6),
            'anomalies' => array_slice($anomalies, 0, 6),
            'mvp_guess' => $mvpName !== '' ? $mvpName : 'Non determine',
            'recommended_action' => $this->truncate($recommendedAction, 350),
            'confidence' => $anomalies === [] ? 68 : 58,
        ];
    }

    /**
     * @param array<string, mixed> $raw
     * @param array{
     *   entity:string,
     *   entity_id:int,
     *   source:'fallback',
     *   provider:string,
     *   model:string,
     *   summary:string,
     *   highlights:list<string>,
     *   anomalies:list<string>,
     *   mvp_guess:string,
     *   recommended_action:string,
     *   confidence:int
     * } $fallback
     * @return array{
     *   entity:string,
     *   entity_id:int,
     *   source:'ai'|'fallback',
     *   provider:string,
     *   model:string,
     *   summary:string,
     *   highlights:list<string>,
     *   anomalies:list<string>,
     *   mvp_guess:string,
     *   recommended_action:string,
     *   confidence:int
     * }
     */
    private function normalizeMatchResult(
        TournamentMatch $match,
        array $raw,
        array $fallback,
    ): array {
        $highlights = $this->sanitizeStringList($raw['highlights'] ?? $fallback['highlights'], 6, 180);
        $anomalies = $this->sanitizeStringList($raw['anomalies'] ?? $fallback['anomalies'], 6, 180);

        return [
            'entity' => 'match',
            'entity_id' => (int) ($match->getMatchId() ?? 0),
            'source' => 'ai',
            'provider' => 'ollama',
            'model' => $this->ollamaClient->getModel(),
            'summary' => $this->truncate(trim((string) ($raw['summary'] ?? $fallback['summary'])), 500),
            'highlights' => $highlights !== [] ? $highlights : $fallback['highlights'],
            'anomalies' => $anomalies !== [] ? $anomalies : $fallback['anomalies'],
            'mvp_guess' => $this->truncate(trim((string) ($raw['mvp_guess'] ?? $fallback['mvp_guess'])), 160),
            'recommended_action' => $this->truncate(
                trim((string) ($raw['recommended_action'] ?? $fallback['recommended_action'])),
                500
            ),
            'confidence' => max(0, min(100, (int) ($raw['confidence'] ?? 70))),
        ];
    }

    /**
     * @return list<string>
     */
    private function sanitizeStringList(mixed $raw, int $maxItems, int $maxItemLength): array
    {
        if (!is_array($raw)) {
            return [];
        }

        $items = [];
        foreach ($raw as $item) {
            $text = trim((string) $item);
            if ($text === '') {
                continue;
            }

            $items[] = $this->truncate($text, $maxItemLength);
            if (count($items) >= $maxItems) {
                break;
            }
        }

        return array_values(array_unique($items));
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
