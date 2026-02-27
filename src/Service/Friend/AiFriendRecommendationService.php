<?php

declare(strict_types=1);

namespace App\Service\Friend;

use App\Entity\FriendRequest;
use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class AiFriendRecommendationService
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly FriendshipRepository $friendshipRepository,
        private readonly FriendRequestRepository $friendRequestRepository,
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
    ) {
    }

    /**
     * @return array{
     *   provider:string,
     *   model:string,
     *   mode:'ai'|'fallback',
     *   status:'ready'|'no_candidates',
     *   message:string,
     *   requirements:list<string>,
     *   recommendations:list<array{user:User, score:int, reason:string}>
     * }
     */
    public function recommendForUser(User $viewer, int $limit = 4): array
    {
        $safeLimit = max(1, min(8, $limit));
        $candidates = $this->buildCandidateMap($viewer, 14);

        $provider = $this->readProvider();
        $model = $this->readModel($provider);

        if ($candidates === []) {
            return [
                'provider' => $provider,
                'model' => $model,
                'mode' => 'fallback',
                'status' => 'no_candidates',
                'message' => 'Aucun profil supplementaire a recommander pour le moment.',
                'requirements' => $this->buildProviderRequirements($provider),
                'recommendations' => [],
            ];
        }

        $fallbackList = $this->buildFallbackRecommendations($candidates, $safeLimit);
        $aiRankings = $this->queryAiRankings($provider, $model, $viewer, $candidates, $safeLimit);

        if ($aiRankings === []) {
            $message = $provider === 'none'
                ? 'Mode IA desactive: recommandations locales appliquees.'
                : 'IA indisponible actuellement: recommandations locales appliquees.';

            return [
                'provider' => $provider,
                'model' => $model,
                'mode' => 'fallback',
                'status' => 'ready',
                'message' => $message,
                'requirements' => $this->buildProviderRequirements($provider),
                'recommendations' => $fallbackList,
            ];
        }

        $recommendations = [];
        $usedIds = [];

        foreach ($aiRankings as $ranking) {
            $candidateId = $ranking['user_id'];
            if (!isset($candidates[$candidateId]) || isset($usedIds[$candidateId])) {
                continue;
            }

            $usedIds[$candidateId] = true;
            $recommendations[] = [
                'user' => $candidates[$candidateId]['user'],
                'score' => max(1, min(99, $ranking['score'])),
                'reason' => $ranking['reason'],
            ];

            if (count($recommendations) >= $safeLimit) {
                break;
            }
        }

        if (count($recommendations) < $safeLimit) {
            foreach ($fallbackList as $fallbackItem) {
                $user = $fallbackItem['user'];
                $userId = $user->getUserId();
                if ($userId === null || isset($usedIds[$userId])) {
                    continue;
                }

                $usedIds[$userId] = true;
                $recommendations[] = $fallbackItem;
                if (count($recommendations) >= $safeLimit) {
                    break;
                }
            }
        }

        return [
            'provider' => $provider,
            'model' => $model,
            'mode' => 'ai',
            'status' => 'ready',
            'message' => 'Recommandations generees par IA.',
            'requirements' => $this->buildProviderRequirements($provider),
            'recommendations' => $recommendations,
        ];
    }

    /**
     * @param array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }> $candidates
     * @return list<array{user:User, score:int, reason:string}>
     */
    private function buildFallbackRecommendations(array $candidates, int $limit): array
    {
        $fallback = [];
        foreach ($candidates as $candidate) {
            $fallback[] = [
                'user' => $candidate['user'],
                'score' => $candidate['base_score'],
                'reason' => $candidate['fallback_reason'],
            ];

            if (count($fallback) >= $limit) {
                break;
            }
        }

        return $fallback;
    }

    /**
     * @param array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }> $candidates
     * @return list<array{user_id:int, score:int, reason:string}>
     */
    private function queryAiRankings(string $provider, string $model, User $viewer, array $candidates, int $limit): array
    {
        if ($provider === 'none') {
            return [];
        }

        $prompt = $this->buildPrompt($viewer, $candidates, $limit);

        try {
            $rawContent = match ($provider) {
                'openai' => $this->queryOpenAi($model, $prompt),
                'ollama' => $this->queryOllama($model, $prompt),
                default => null,
            };
        } catch (\Throwable $exception) {
            $this->logger->warning('Friend recommendation AI request failed.', [
                'provider' => $provider,
                'error' => $exception->getMessage(),
            ]);
            return [];
        }

        if (!is_string($rawContent) || trim($rawContent) === '') {
            return [];
        }

        return $this->parseAiRankings($rawContent);
    }

    /**
     * @param array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }> $candidates
     */
    private function buildPrompt(User $viewer, array $candidates, int $limit): string
    {
        $viewerPayload = [
            'viewer_user_id' => $viewer->getUserId(),
            'viewer_role' => $viewer->getRole(),
            'viewer_country' => (string) ($viewer->getCountry() ?? ''),
            'viewer_bio' => $this->truncate((string) ($viewer->getBio() ?? ''), 260),
        ];

        $candidatesPayload = [];
        foreach ($candidates as $candidate) {
            $candidatesPayload[] = $candidate['payload'];
        }

        $jsonPayload = (string) json_encode([
            'viewer' => $viewerPayload,
            'candidates' => $candidatesPayload,
            'limit' => $limit,
        ], JSON_UNESCAPED_SLASHES);

        return <<<PROMPT
Tu es un moteur de recommandation d'amis pour un reseau de joueurs.
Objectif: retourner les profils les plus pertinents.
Regles:
- retourne uniquement du JSON valide
- format exact: {"recommendations":[{"user_id":123,"score":82,"reason":"..."}]}
- "score" est un entier entre 1 et 99
- "reason" est en francais, 120 caracteres max
- pas de doublons
- au maximum {$limit} recommandations

Donnees:
{$jsonPayload}
PROMPT;
    }

    private function queryOpenAi(string $model, string $prompt): ?string
    {
        $apiKey = $this->readEnv('FRIEND_RECO_OPENAI_API_KEY', '');
        if ($apiKey === '') {
            return null;
        }

        $baseUrl = rtrim($this->readEnv('FRIEND_RECO_OPENAI_BASE_URL', 'https://api.openai.com/v1'), '/');
        if (!str_ends_with($baseUrl, '/v1')) {
            $baseUrl .= '/v1';
        }

        $response = $this->httpClient->request('POST', $baseUrl . '/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => $model,
                'temperature' => 0.2,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => "Tu renvoies uniquement du JSON. Aucun texte hors JSON.",
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt,
                    ],
                ],
            ],
            'timeout' => 20,
        ]);

        $payload = $response->toArray(false);

        return (string) ($payload['choices'][0]['message']['content'] ?? '');
    }

    private function queryOllama(string $model, string $prompt): ?string
    {
        $baseUrl = rtrim($this->readEnv('FRIEND_RECO_OLLAMA_BASE_URL', 'http://127.0.0.1:11434'), '/');

        $response = $this->httpClient->request('POST', $baseUrl . '/api/chat', [
            'json' => [
                'model' => $model,
                'stream' => false,
                'format' => 'json',
                'options' => [
                    'temperature' => 0.2,
                ],
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => "Tu renvoies uniquement du JSON. Aucun texte hors JSON.",
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt,
                    ],
                ],
            ],
            'timeout' => 30,
        ]);

        $payload = $response->toArray(false);

        return (string) ($payload['message']['content'] ?? '');
    }

    /**
     * @return list<array{user_id:int, score:int, reason:string}>
     */
    private function parseAiRankings(string $rawContent): array
    {
        $decoded = $this->decodeJsonPayload($rawContent);
        if (!is_array($decoded)) {
            return [];
        }

        $rows = $decoded['recommendations'] ?? $decoded;
        if (!is_array($rows)) {
            return [];
        }

        $rankings = [];
        $seenIds = [];
        foreach ($rows as $row) {
            if (!is_array($row)) {
                continue;
            }

            $userId = (int) ($row['user_id'] ?? 0);
            if ($userId <= 0 || isset($seenIds[$userId])) {
                continue;
            }

            $seenIds[$userId] = true;
            $score = max(1, min(99, (int) ($row['score'] ?? 70)));
            $reasonRaw = trim((string) ($row['reason'] ?? 'Profil pertinent pour votre reseau.'));

            $rankings[] = [
                'user_id' => $userId,
                'score' => $score,
                'reason' => $this->truncate($reasonRaw !== '' ? $reasonRaw : 'Profil pertinent pour votre reseau.', 140),
            ];
        }

        return $rankings;
    }

    /**
     * @return array<string, mixed>|null
     */
    private function decodeJsonPayload(string $rawContent): ?array
    {
        $trimmed = trim($rawContent);
        if ($trimmed === '') {
            return null;
        }

        if (str_starts_with($trimmed, '```')) {
            $trimmed = preg_replace('/^```(?:json)?\s*|\s*```$/i', '', $trimmed) ?? $trimmed;
            $trimmed = trim($trimmed);
        }

        $decoded = json_decode($trimmed, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        $start = strpos($trimmed, '{');
        $end = strrpos($trimmed, '}');
        if ($start === false || $end === false || $end <= $start) {
            return null;
        }

        $slice = substr($trimmed, $start, $end - $start + 1);
        if (!is_string($slice) || trim($slice) === '') {
            return null;
        }

        $decodedSlice = json_decode($slice, true);

        return is_array($decodedSlice) ? $decodedSlice : null;
    }

    /**
     * @return array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }>
     */
    private function buildCandidateMap(User $viewer, int $maxPool): array
    {
        $excludedUserIds = $this->collectExcludedUserIds($viewer);

        $users = $this->userRepository->searchUsers(
            $viewer,
            null,
            null,
            null,
            400,
            'updated_at',
            'desc'
        );

        $candidates = [];
        foreach ($users as $candidate) {
            if (!$candidate instanceof User || !$candidate->isActive()) {
                continue;
            }

            $candidateId = $candidate->getUserId();
            if ($candidateId === null || isset($excludedUserIds[$candidateId])) {
                continue;
            }

            [$score, $reason] = $this->computeFallbackScoreAndReason($viewer, $candidate);
            $candidates[$candidateId] = [
                'user' => $candidate,
                'base_score' => $score,
                'fallback_reason' => $reason,
                'payload' => $this->buildCandidatePayload($candidate, $score),
            ];
        }

        uasort(
            $candidates,
            static fn (array $left, array $right): int => ($right['base_score'] <=> $left['base_score'])
        );

        return array_slice($candidates, 0, max(1, $maxPool), true);
    }

    /**
     * @return array<int, bool>
     */
    private function collectExcludedUserIds(User $viewer): array
    {
        $excludedIds = [];
        $viewerId = $viewer->getUserId();
        if ($viewerId !== null) {
            $excludedIds[$viewerId] = true;
        }

        foreach ($this->friendshipRepository->findFriendsByUser($viewer, null, 'recent', 1500) as $friend) {
            $friendId = $friend->getUserId();
            if ($friendId !== null) {
                $excludedIds[$friendId] = true;
            }
        }

        foreach ($this->friendRequestRepository->findReceivedByUserFiltered($viewer, 'PENDING', null, 'latest', 800) as $request) {
            if ($request instanceof FriendRequest) {
                $requestUser = $request->getFromUserId();
                $requestUserId = $requestUser?->getUserId();
                if ($requestUserId !== null) {
                    $excludedIds[$requestUserId] = true;
                }
            }
        }

        foreach ($this->friendRequestRepository->findSentByUserFiltered($viewer, 'PENDING', null, 'latest', 800) as $request) {
            if ($request instanceof FriendRequest) {
                $requestUser = $request->getToUserId();
                $requestUserId = $requestUser?->getUserId();
                if ($requestUserId !== null) {
                    $excludedIds[$requestUserId] = true;
                }
            }
        }

        return $excludedIds;
    }

    /**
     * @return array{0:int,1:string}
     */
    private function computeFallbackScoreAndReason(User $viewer, User $candidate): array
    {
        $score = 34;
        $reasonParts = [];

        if ($viewer->getRole() === $candidate->getRole()) {
            $score += 24;
            $reasonParts[] = 'meme role';
        }

        $viewerCountry = mb_strtolower(trim((string) ($viewer->getCountry() ?? '')));
        $candidateCountry = mb_strtolower(trim((string) ($candidate->getCountry() ?? '')));
        if ($viewerCountry !== '' && $viewerCountry === $candidateCountry) {
            $score += 20;
            $reasonParts[] = 'meme pays';
        }

        $sharedKeywords = $this->sharedBioKeywords($viewer, $candidate);
        if ($sharedKeywords !== []) {
            $score += min(18, count($sharedKeywords) * 4);
            $reasonParts[] = 'interets proches: ' . implode(', ', array_slice($sharedKeywords, 0, 3));
        }

        if ($candidate->isEmailVerified()) {
            $score += 4;
        }

        $recentThreshold = new \DateTimeImmutable('-30 days');
        if ($candidate->getLastLoginAt() instanceof \DateTimeInterface && $candidate->getLastLoginAt() >= $recentThreshold) {
            $score += 8;
            $reasonParts[] = 'actif recemment';
        }

        $safeScore = max(1, min(99, $score));
        if ($reasonParts === []) {
            return [$safeScore, 'Profil actif avec des points communs potentiels.'];
        }

        return [$safeScore, ucfirst(implode(', ', array_slice($reasonParts, 0, 3))) . '.'];
    }

    /**
     * @return list<string>
     */
    private function sharedBioKeywords(User $viewer, User $candidate): array
    {
        $viewerKeywords = $this->extractKeywords((string) ($viewer->getBio() ?? ''));
        $candidateKeywords = $this->extractKeywords((string) ($candidate->getBio() ?? ''));

        if ($viewerKeywords === [] || $candidateKeywords === []) {
            return [];
        }

        $intersection = array_values(array_intersect($viewerKeywords, $candidateKeywords));

        return array_slice($intersection, 0, 5);
    }

    /**
     * @return list<string>
     */
    private function extractKeywords(string $text): array
    {
        $normalized = mb_strtolower(trim($text));
        if ($normalized === '') {
            return [];
        }

        $normalized = (string) preg_replace('/[^a-z0-9\s]/i', ' ', $normalized);
        $parts = preg_split('/\s+/', $normalized) ?: [];
        $stopWords = [
            'avec', 'dans', 'pour', 'mais', 'vous', 'nous', 'leur', 'elle', 'elles', 'ils', 'deux',
            'sans', 'plus', 'tres', 'tout', 'tous', 'dans', 'cette', 'cette', 'etre', 'avoir',
            'jeux', 'jouer', 'joueur', 'joueuse', 'team', 'equipe', 'sport', 'match',
        ];
        $stopWordLookup = array_fill_keys($stopWords, true);

        $keywords = [];
        foreach ($parts as $part) {
            if (!is_string($part)) {
                continue;
            }

            $word = trim($part);
            if (strlen($word) < 4 || isset($stopWordLookup[$word])) {
                continue;
            }

            $keywords[$word] = true;
            if (count($keywords) >= 14) {
                break;
            }
        }

        return array_keys($keywords);
    }

    /**
     * @return array<string, mixed>
     */
    private function buildCandidatePayload(User $candidate, int $baseScore): array
    {
        return [
            'user_id' => $candidate->getUserId(),
            'display_name' => (string) ($candidate->getDisplayName() ?? ''),
            'username' => (string) ($candidate->getUsername() ?? ''),
            'role' => $candidate->getRole(),
            'country' => (string) ($candidate->getCountry() ?? ''),
            'bio' => $this->truncate((string) ($candidate->getBio() ?? ''), 180),
            'base_score' => $baseScore,
        ];
    }

    private function readProvider(): string
    {
        $provider = strtolower($this->readEnv('FRIEND_RECO_AI_PROVIDER', 'ollama'));

        return in_array($provider, ['openai', 'ollama', 'none'], true) ? $provider : 'ollama';
    }

    private function readModel(string $provider): string
    {
        $defaultModel = $provider === 'openai' ? 'gpt-4.1-mini' : 'gpt-oss:20b';

        return $this->readEnv('FRIEND_RECO_AI_MODEL', $defaultModel);
    }

    /**
     * @return list<string>
     */
    private function buildProviderRequirements(string $provider): array
    {
        if ($provider === 'openai') {
            return [
                'FRIEND_RECO_AI_PROVIDER=openai',
                'FRIEND_RECO_OPENAI_API_KEY=<api_key>',
                'Connexion internet active',
                'FRIEND_RECO_AI_MODEL (ex: gpt-4.1-mini)',
            ];
        }

        if ($provider === 'ollama') {
            return [
                'FRIEND_RECO_AI_PROVIDER=ollama',
                'Ollama installe et lance',
                'Modele local telecharge (ex: gpt-oss:20b)',
                'FRIEND_RECO_OLLAMA_BASE_URL (defaut: http://127.0.0.1:11434)',
            ];
        }

        return [
            'FRIEND_RECO_AI_PROVIDER=none',
            'Aucune cle API requise',
            'Mode heuristique local uniquement',
        ];
    }

    private function readEnv(string $key, string $default): string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
        if (!is_string($value)) {
            return $default;
        }

        $trimmed = trim($value);

        return $trimmed !== '' ? $trimmed : $default;
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
