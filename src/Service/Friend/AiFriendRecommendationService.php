<?php

declare(strict_types=1);

namespace App\Service\Friend;

use App\Entity\FriendRequest;
use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class AiFriendRecommendationService
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly FriendshipRepository $friendshipRepository,
        private readonly FriendRequestRepository $friendRequestRepository,
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
        #[Autowire(service: 'cache.app')]
        private readonly CacheItemPoolInterface $cachePool,
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
        $provider = $this->readProvider();
        $model = $this->readModel($provider);
        $candidatePool = $this->readIntEnv('FRIEND_RECO_CANDIDATE_POOL', 8, 4, 20);
        $candidates = $this->buildCandidateMap($viewer, $candidatePool);

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
        $aiResult = $this->getCachedAiResult($provider, $model, $viewer, $candidates, $safeLimit);
        $aiRankings = $aiResult['rankings'];
        $aiSource = is_string($aiResult['source'] ?? null) ? $aiResult['source'] : 'none';
        $effectiveModel = is_string($aiResult['used_model']) && trim($aiResult['used_model']) !== ''
            ? $aiResult['used_model']
            : $model;

        if ($aiRankings === []) {
            if ($provider !== 'none') {
                return [
                    'provider' => $provider,
                    'model' => $effectiveModel,
                    'mode' => 'ai',
                    'status' => 'ready',
                    'message' => 'Mode IA de secours actif: recommandations rapides appliquees.',
                    'requirements' => $this->buildProviderRequirements($provider),
                    'recommendations' => $fallbackList,
                ];
            }

            return [
                'provider' => $provider,
                'model' => $effectiveModel,
                'mode' => 'fallback',
                'status' => 'ready',
                'message' => 'Mode IA desactive: recommandations locales appliquees.',
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
            'model' => $effectiveModel,
            'mode' => 'ai',
            'status' => 'ready',
            'message' => $aiSource === 'last_success'
                ? 'Recommandations IA recentes reutilisees (' . $effectiveModel . ').'
                : ($effectiveModel === $model
                    ? 'Recommandations generees par IA.'
                    : 'Recommandations generees par IA (' . $effectiveModel . ').'),
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
     * @return array{
     *   rankings:list<array{user_id:int, score:int, reason:string}>,
     *   used_model:?string,
     *   source:'fresh'|'last_success'|'none'
     * }
     */
    private function getCachedAiResult(
        string $provider,
        string $model,
        User $viewer,
        array $candidates,
        int $limit
    ): array {
        if ($provider === 'none') {
            return [
                'rankings' => [],
                'used_model' => null,
                'source' => 'none',
            ];
        }

        $cacheKey = $this->buildAiCacheKey($provider, $model, $viewer, $candidates, $limit);
        $ttlSeconds = $this->readIntEnv('FRIEND_RECO_CACHE_TTL_SECONDS', 180, 30, 1800);
        $lastSuccessTtlSeconds = $this->readIntEnv('FRIEND_RECO_LAST_SUCCESS_TTL_SECONDS', 3600, 60, 86400);

        try {
            $cacheItem = $this->cachePool->getItem($cacheKey);
            if ($cacheItem->isHit()) {
                $value = $cacheItem->get();
                if (is_array($value)) {
                    $rankings = $value['rankings'] ?? null;
                    if (is_array($rankings) && $rankings !== []) {
                        return [
                            'rankings' => $rankings,
                            'used_model' => is_string($value['used_model'] ?? null) ? $value['used_model'] : null,
                            'source' => 'fresh',
                        ];
                    }
                }
            }
        } catch (\Throwable $exception) {
            $this->logger->warning('Friend recommendation cache read failed.', [
                'error' => $exception->getMessage(),
            ]);
        }

        $liveResult = $this->queryAiRankings($provider, $model, $viewer, $candidates, $limit);
        if (($liveResult['rankings'] ?? []) !== []) {
            try {
                $cacheItem = $this->cachePool->getItem($cacheKey);
                $cacheItem->set([
                    'rankings' => $liveResult['rankings'],
                    'used_model' => $liveResult['used_model'] ?? null,
                ]);
                $cacheItem->expiresAfter($ttlSeconds);
                $this->cachePool->save($cacheItem);

                $lastSuccessKey = $this->buildLastSuccessCacheKey($provider, $viewer);
                $lastSuccessItem = $this->cachePool->getItem($lastSuccessKey);
                $lastSuccessItem->set([
                    'rankings' => $liveResult['rankings'],
                    'used_model' => $liveResult['used_model'] ?? null,
                ]);
                $lastSuccessItem->expiresAfter($lastSuccessTtlSeconds);
                $this->cachePool->save($lastSuccessItem);
            } catch (\Throwable $exception) {
                $this->logger->warning('Friend recommendation cache write failed.', [
                    'error' => $exception->getMessage(),
                ]);
            }

            return [
                'rankings' => $liveResult['rankings'],
                'used_model' => $liveResult['used_model'] ?? null,
                'source' => 'fresh',
            ];
        }

        try {
            $lastSuccessKey = $this->buildLastSuccessCacheKey($provider, $viewer);
            $lastSuccessItem = $this->cachePool->getItem($lastSuccessKey);
            if ($lastSuccessItem->isHit()) {
                $value = $lastSuccessItem->get();
                if (is_array($value) && is_array($value['rankings'] ?? null) && ($value['rankings'] ?? []) !== []) {
                    return [
                        'rankings' => $value['rankings'],
                        'used_model' => is_string($value['used_model'] ?? null) ? $value['used_model'] : null,
                        'source' => 'last_success',
                    ];
                }
            }
        } catch (\Throwable $exception) {
            $this->logger->warning('Friend recommendation last-success cache read failed.', [
                'error' => $exception->getMessage(),
            ]);
        }

        return [
            'rankings' => [],
            'used_model' => null,
            'source' => 'none',
        ];
    }

    /**
     * @param array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }> $candidates
     * @return array{
     *   rankings:list<array{user_id:int, score:int, reason:string}>,
     *   used_model:?string
     * }
     */
    private function queryAiRankings(string $provider, string $model, User $viewer, array $candidates, int $limit): array
    {
        if ($provider === 'none') {
            return [
                'rankings' => [],
                'used_model' => null,
            ];
        }

        $prompt = $this->buildPrompt($viewer, $candidates, $limit);
        $rawContent = null;
        $usedModel = null;

        try {
            if ($provider === 'openai') {
                $rawContent = $this->queryOpenAi($model, $prompt);
                $usedModel = $rawContent !== null ? $model : null;
            } elseif ($provider === 'ollama') {
                $ollamaResult = $this->queryOllamaWithFallback($model, $prompt);
                $rawContent = $ollamaResult['content'];
                $usedModel = $ollamaResult['used_model'];
            }
        } catch (\Throwable $exception) {
            $this->logger->warning('Friend recommendation AI request failed.', [
                'provider' => $provider,
                'error' => $exception->getMessage(),
            ]);

            return [
                'rankings' => [],
                'used_model' => null,
            ];
        }

        if (!is_string($rawContent) || trim($rawContent) === '') {
            return [
                'rankings' => [],
                'used_model' => $usedModel,
            ];
        }

        $parsedRankings = $this->parseAiRankings($rawContent);

        // Some models return non-JSON or unusable JSON; retry directly on fallback model.
        if ($provider === 'ollama' && $parsedRankings === [] && is_string($usedModel) && $usedModel === $model) {
            $fallbackModel = $this->readEnv('FRIEND_RECO_OLLAMA_FALLBACK_MODEL', 'gemma3:4b');
            if ($fallbackModel !== '' && $fallbackModel !== $model) {
                $fallbackTimeoutMs = $this->readIntEnv('FRIEND_RECO_OLLAMA_FALLBACK_TIMEOUT_MS', 5000, 800, 20000);
                $fallbackContent = $this->queryOllamaModel($fallbackModel, $prompt, $fallbackTimeoutMs);
                if (is_string($fallbackContent) && trim($fallbackContent) !== '') {
                    $fallbackParsed = $this->parseAiRankings($fallbackContent);
                    if ($fallbackParsed !== []) {
                        return [
                            'rankings' => $fallbackParsed,
                            'used_model' => $fallbackModel,
                        ];
                    }
                }
            }
        }

        return [
            'rankings' => $parsedRankings,
            'used_model' => $usedModel,
        ];
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
            'viewer_bio' => $this->truncate((string) ($viewer->getBio() ?? ''), 120),
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

        $allowedIds = array_map(
            static fn (array $candidate): int => (int) ($candidate['payload']['user_id'] ?? 0),
            array_values($candidates)
        );
        $allowedIds = array_values(array_filter($allowedIds, static fn (int $id): bool => $id > 0));

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
- aucune explication de raisonnement
- reponse concise et directe
- user_id doit etre choisi uniquement dans cette liste: [{$this->implodeIntList($allowedIds)}]

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

        try {
            $response = $this->httpClient->request('POST', $baseUrl . '/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $model,
                    'temperature' => 0.1,
                    'max_tokens' => $this->readIntEnv('FRIEND_RECO_OPENAI_MAX_TOKENS', 140, 60, 300),
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => "Tu renvoies uniquement du JSON. Pas de raisonnement.",
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                ],
                'timeout' => max(1.0, $this->readIntEnv('FRIEND_RECO_OPENAI_TIMEOUT_MS', 4500, 1000, 20000) / 1000),
            ]);
        } catch (\Throwable $exception) {
            $this->logger->warning('OpenAI friend recommendation failed.', [
                'error' => $exception->getMessage(),
            ]);

            return null;
        }

        $payload = $response->toArray(false);

        return (string) ($payload['choices'][0]['message']['content'] ?? '');
    }

    /**
     * @return array{content:?string, used_model:?string}
     */
    private function queryOllamaWithFallback(string $model, string $prompt): array
    {
        $primaryTimeoutMs = $this->readIntEnv('FRIEND_RECO_OLLAMA_TIMEOUT_MS', 7000, 800, 20000);
        $fallbackTimeoutMs = $this->readIntEnv('FRIEND_RECO_OLLAMA_FALLBACK_TIMEOUT_MS', 5000, 800, 20000);
        $fallbackModel = $this->readEnv('FRIEND_RECO_OLLAMA_FALLBACK_MODEL', 'gemma3:4b');
        $availableModels = $this->fetchAvailableOllamaModels();

        $modelOrder = [$model];
        if ($fallbackModel !== '' && $fallbackModel !== $model) {
            $modelOrder[] = $fallbackModel;
        }

        foreach ($modelOrder as $modelName) {
            if ($availableModels !== [] && !in_array($modelName, $availableModels, true)) {
                continue;
            }

            $timeoutMs = $modelName === $model ? $primaryTimeoutMs : $fallbackTimeoutMs;
            $content = $this->queryOllamaModel($modelName, $prompt, $timeoutMs);
            if (is_string($content) && trim($content) !== '') {
                return [
                    'content' => $content,
                    'used_model' => $modelName,
                ];
            }
        }

        return [
            'content' => null,
            'used_model' => null,
        ];
    }

    private function queryOllamaModel(string $model, string $prompt, int $timeoutMs): ?string
    {
        $baseUrl = rtrim($this->readEnv('FRIEND_RECO_OLLAMA_BASE_URL', 'http://127.0.0.1:11434'), '/');
        $keepAlive = $this->readEnv('FRIEND_RECO_OLLAMA_KEEP_ALIVE', '20m');
        $retries = $this->readIntEnv('FRIEND_RECO_OLLAMA_RETRIES', 2, 1, 4);
        $numCtx = $this->readIntEnv('FRIEND_RECO_OLLAMA_NUM_CTX', 1536, 512, 4096);
        $numPredict = $this->readIntEnv('FRIEND_RECO_OLLAMA_MAX_TOKENS', 140, 60, 300);

        for ($attempt = 1; $attempt <= $retries; $attempt++) {
            $attemptTimeoutMs = $timeoutMs + (($attempt - 1) * 1500);

            try {
                $response = $this->httpClient->request('POST', $baseUrl . '/api/generate', [
                    'json' => [
                        'model' => $model,
                        'stream' => false,
                        'format' => 'json',
                        'keep_alive' => $keepAlive,
                        'prompt' => "Tu renvoies uniquement du JSON. Pas de raisonnement.\n\n" . $prompt,
                        'options' => [
                            'temperature' => 0.1,
                            'num_ctx' => $numCtx,
                            'num_predict' => $numPredict,
                        ],
                    ],
                    'timeout' => max(1.0, $attemptTimeoutMs / 1000),
                ]);

                $payload = $response->toArray(false);
                $content = (string) ($payload['response'] ?? '');
                if (trim($content) !== '') {
                    return $content;
                }
            } catch (\Throwable $exception) {
                $this->logger->info('Ollama request failed for friend recommendation.', [
                    'model' => $model,
                    'attempt' => $attempt,
                    'error' => $exception->getMessage(),
                ]);
            }
        }

        return null;
    }

    /**
     * @return list<array{user_id:int, score:int, reason:string}>
     */
    private function parseAiRankings(string $rawContent): array
    {
        $decoded = $this->decodeJsonPayload($rawContent);
        if (!is_array($decoded)) {
            return $this->parseRankingsFromText($rawContent);
        }

        $rows = $decoded['recommendations'] ?? $decoded['ranking'] ?? $decoded['suggestions'] ?? $decoded;
        if (!is_array($rows)) {
            return $this->parseRankingsFromText($rawContent);
        }

        $rankings = [];
        $seenIds = [];
        foreach ($rows as $row) {
            if (is_int($row)) {
                $row = ['user_id' => $row];
            }

            if (!is_array($row)) {
                continue;
            }

            $userId = (int) ($row['user_id'] ?? $row['userId'] ?? $row['id'] ?? 0);
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

        return $rankings !== [] ? $rankings : $this->parseRankingsFromText($rawContent);
    }

    /**
     * @return list<array{user_id:int, score:int, reason:string}>
     */
    private function parseRankingsFromText(string $rawContent): array
    {
        if (preg_match_all('/\b([1-9][0-9]*)\b/', $rawContent, $matches) !== 1) {
            return [];
        }

        $ids = array_values(array_unique(array_map('intval', $matches[1] ?? [])));
        if ($ids === []) {
            return [];
        }

        $rankings = [];
        foreach (array_slice($ids, 0, 8) as $index => $id) {
            $rankings[] = [
                'user_id' => $id,
                'score' => max(1, 90 - ($index * 6)),
                'reason' => 'Profil recommande par IA.',
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
            'bio' => $this->truncate((string) ($candidate->getBio() ?? ''), 100),
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
                'Modele principal (ex: gpt-oss:20b)',
                'Modele fallback (ex: gemma3:4b)',
                'Timeout rapide + fallback automatique actives',
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

    /**
     * @return list<string>
     */
    private function fetchAvailableOllamaModels(): array
    {
        $baseUrl = rtrim($this->readEnv('FRIEND_RECO_OLLAMA_BASE_URL', 'http://127.0.0.1:11434'), '/');
        $timeoutMs = $this->readIntEnv('FRIEND_RECO_OLLAMA_TAGS_TIMEOUT_MS', 1200, 300, 6000);

        try {
            $response = $this->httpClient->request('GET', $baseUrl . '/api/tags', [
                'timeout' => max(0.3, $timeoutMs / 1000),
            ]);
            $payload = $response->toArray(false);
        } catch (\Throwable) {
            return [];
        }

        $models = $payload['models'] ?? [];
        if (!is_array($models)) {
            return [];
        }

        $names = [];
        foreach ($models as $model) {
            if (!is_array($model)) {
                continue;
            }

            $name = trim((string) ($model['name'] ?? ''));
            if ($name !== '') {
                $names[] = $name;
            }
        }

        return array_values(array_unique($names));
    }

    /**
     * @param array<int, array{
     *   user:User,
     *   base_score:int,
     *   fallback_reason:string,
     *   payload:array<string, mixed>
     * }> $candidates
     */
    private function buildAiCacheKey(string $provider, string $model, User $viewer, array $candidates, int $limit): string
    {
        $candidateSignature = [];
        foreach ($candidates as $candidateId => $candidate) {
            $candidateSignature[] = $candidateId . ':' . $candidate['base_score'];
        }

        $fingerprint = (string) json_encode([
            'provider' => $provider,
            'model' => $model,
            'fallback_model' => $this->readEnv('FRIEND_RECO_OLLAMA_FALLBACK_MODEL', 'gemma3:4b'),
            'viewer_id' => $viewer->getUserId(),
            'limit' => $limit,
            'candidates' => $candidateSignature,
        ], JSON_UNESCAPED_SLASHES);

        return 'friend_reco_ai_' . sha1($fingerprint);
    }

    private function buildLastSuccessCacheKey(string $provider, User $viewer): string
    {
        $viewerId = $viewer->getUserId() ?? 0;

        return 'friend_reco_ai_last_success_' . sha1($provider . '_' . (string) $viewerId);
    }

    private function readIntEnv(string $key, int $default, int $min, int $max): int
    {
        $raw = $this->readEnv($key, (string) $default);
        $value = filter_var($raw, FILTER_VALIDATE_INT);
        if ($value === false) {
            return $default;
        }

        return max($min, min($max, $value));
    }

    /**
     * @param list<int> $values
     */
    private function implodeIntList(array $values): string
    {
        if ($values === []) {
            return '';
        }

        return implode(', ', array_map(static fn (int $value): string => (string) $value, $values));
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
