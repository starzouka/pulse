<?php

declare(strict_types=1);

namespace App\Service\Ai;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OllamaClientService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
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
        $baseUrl = $this->getBaseUrl();
        $model = $this->getModel();

        try {
            $response = $this->httpClient->request('GET', $baseUrl . '/api/tags', [
                'timeout' => 6,
            ]);

            $payload = $response->toArray(false);
            $models = [];

            $rows = $payload['models'] ?? [];
            if (is_array($rows)) {
                foreach ($rows as $row) {
                    if (!is_array($row)) {
                        continue;
                    }

                    $name = trim((string) ($row['name'] ?? $row['model'] ?? ''));
                    if ($name !== '') {
                        $models[] = $name;
                    }
                }
            }

            $models = array_values(array_unique($models));
            $modelInstalled = in_array($model, $models, true);

            return [
                'provider' => 'ollama',
                'base_url' => $baseUrl,
                'model' => $model,
                'ok' => true,
                'model_installed' => $modelInstalled,
                'installed_models' => $models,
                'message' => $modelInstalled
                    ? 'Ollama reachable et modele present.'
                    : 'Ollama reachable mais modele non trouve. Lance: ollama pull ' . $model,
            ];
        } catch (\Throwable $exception) {
            $this->logger->warning('Ollama health check failed.', [
                'error' => $exception->getMessage(),
            ]);

            return [
                'provider' => 'ollama',
                'base_url' => $baseUrl,
                'model' => $model,
                'ok' => false,
                'model_installed' => false,
                'installed_models' => [],
                'message' => 'Ollama indisponible: ' . $exception->getMessage(),
            ];
        }
    }

    /**
     * @return array<string, mixed>|null
     */
    public function chatJson(
        string $systemPrompt,
        string $userPrompt,
        ?string $model = null,
        float $temperature = 0.2,
        int $timeout = 35,
    ): ?array {
        $baseUrl = $this->getBaseUrl();
        $targetModel = trim((string) ($model ?? $this->getModel()));
        if ($targetModel === '') {
            return null;
        }

        try {
            $response = $this->httpClient->request('POST', $baseUrl . '/api/chat', [
                'json' => [
                    'model' => $targetModel,
                    'stream' => false,
                    'format' => 'json',
                    'options' => [
                        'temperature' => $temperature,
                    ],
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => $systemPrompt,
                        ],
                        [
                            'role' => 'user',
                            'content' => $userPrompt,
                        ],
                    ],
                ],
                'timeout' => max(5, $timeout),
            ]);

            $payload = $response->toArray(false);
            $content = trim((string) ($payload['message']['content'] ?? ''));
            if ($content === '') {
                return null;
            }

            return $this->decodeJsonPayload($content);
        } catch (\Throwable $exception) {
            $this->logger->warning('Ollama chat request failed.', [
                'model' => $targetModel,
                'error' => $exception->getMessage(),
            ]);

            return null;
        }
    }

    public function getBaseUrl(): string
    {
        return rtrim($this->readEnv('TOURNAMENT_AI_OLLAMA_BASE_URL', $this->readEnv('FRIEND_RECO_OLLAMA_BASE_URL', 'http://127.0.0.1:11434')), '/');
    }

    public function getModel(): string
    {
        return $this->readEnv('TOURNAMENT_AI_MODEL', 'qwen3:8b');
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
}

