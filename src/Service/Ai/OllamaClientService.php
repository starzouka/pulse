<?php

declare(strict_types=1);

namespace App\Service\Ai;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OllamaClientService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
    ) {
    }

    public function isEnabled(): bool
    {
        return $this->readBoolEnv('OLLAMA_ENABLED', true);
    }

    public function getBaseUrl(): string
    {
        $baseUrl = trim((string) $this->readEnv('OLLAMA_BASE_URL', 'http://127.0.0.1:11434'));

        return rtrim($baseUrl, '/');
    }

    public function getChatModel(): string
    {
        return trim((string) $this->readEnv('OLLAMA_CHAT_MODEL', 'gemma3:4b'));
    }

    public function getTimeoutSeconds(): int
    {
        $timeout = (int) $this->readEnv('OLLAMA_TIMEOUT_SECONDS', '20');

        return max(2, min(90, $timeout));
    }

    /**
     * @return array{
     *   ok:bool,
     *   status:'READY'|'DISABLED'|'ERROR',
     *   model:string,
     *   baseUrl:string,
     *   latencyMs:int,
     *   data:?array<string,mixed>,
     *   error:?string
     * }
     */
    public function chatJson(string $systemPrompt, string $userPrompt): array
    {
        $model = $this->getChatModel();
        $baseUrl = $this->getBaseUrl();

        if (!$this->isEnabled()) {
            return [
                'ok' => false,
                'status' => 'DISABLED',
                'model' => $model,
                'baseUrl' => $baseUrl,
                'latencyMs' => 0,
                'data' => null,
                'error' => 'Ollama disabled via OLLAMA_ENABLED=0',
            ];
        }

        $startedAt = microtime(true);

        try {
            $response = $this->httpClient->request('POST', $baseUrl . '/api/chat', [
                'json' => [
                    'model' => $model,
                    'stream' => false,
                    'format' => 'json',
                    'messages' => [
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => $userPrompt],
                    ],
                    'options' => [
                        'temperature' => 0.2,
                    ],
                ],
                'timeout' => $this->getTimeoutSeconds(),
            ]);

            $payload = $response->toArray(false);
            $content = trim((string) (($payload['message']['content'] ?? null) ?: ''));
            $decoded = $this->decodeJsonObject($content);

            if (!is_array($decoded)) {
                return [
                    'ok' => false,
                    'status' => 'ERROR',
                    'model' => $model,
                    'baseUrl' => $baseUrl,
                    'latencyMs' => $this->elapsedMs($startedAt),
                    'data' => null,
                    'error' => 'Ollama response is not valid JSON object.',
                ];
            }

            return [
                'ok' => true,
                'status' => 'READY',
                'model' => $model,
                'baseUrl' => $baseUrl,
                'latencyMs' => $this->elapsedMs($startedAt),
                'data' => $decoded,
                'error' => null,
            ];
        } catch (\Throwable $e) {
            return [
                'ok' => false,
                'status' => 'ERROR',
                'model' => $model,
                'baseUrl' => $baseUrl,
                'latencyMs' => $this->elapsedMs($startedAt),
                'data' => null,
                'error' => $this->sanitizeError($e->getMessage()),
            ];
        }
    }

    public function ping(): bool
    {
        if (!$this->isEnabled()) {
            return false;
        }

        try {
            $response = $this->httpClient->request('GET', $this->getBaseUrl() . '/api/tags', [
                'timeout' => min(10, $this->getTimeoutSeconds()),
            ]);

            $statusCode = $response->getStatusCode();

            return $statusCode >= 200 && $statusCode < 300;
        } catch (\Throwable) {
            return false;
        }
    }

    /**
     * @return array{
     *   ok:bool,
     *   status:'READY'|'DISABLED'|'ERROR',
     *   baseUrl:string,
     *   models:list<array{name:string,size:?int,family:?string,modifiedAt:?string}>,
     *   error:?string
     * }
     */
    public function listModels(): array
    {
        $baseUrl = $this->getBaseUrl();
        if (!$this->isEnabled()) {
            return [
                'ok' => false,
                'status' => 'DISABLED',
                'baseUrl' => $baseUrl,
                'models' => [],
                'error' => 'Ollama disabled via OLLAMA_ENABLED=0',
            ];
        }

        try {
            $response = $this->httpClient->request('GET', $baseUrl . '/api/tags', [
                'timeout' => min(10, $this->getTimeoutSeconds()),
            ]);

            $payload = $response->toArray(false);
            $rows = $payload['models'] ?? null;
            $models = [];
            if (is_array($rows)) {
                foreach ($rows as $row) {
                    if (!is_array($row)) {
                        continue;
                    }

                    $name = trim((string) ($row['name'] ?? ''));
                    if ($name === '') {
                        continue;
                    }

                    $details = is_array($row['details'] ?? null) ? $row['details'] : [];

                    $models[] = [
                        'name' => $name,
                        'size' => isset($row['size']) && is_numeric($row['size']) ? (int) $row['size'] : null,
                        'family' => isset($details['family']) ? trim((string) $details['family']) : null,
                        'modifiedAt' => isset($row['modified_at']) ? trim((string) $row['modified_at']) : null,
                    ];
                }
            }

            return [
                'ok' => true,
                'status' => 'READY',
                'baseUrl' => $baseUrl,
                'models' => $models,
                'error' => null,
            ];
        } catch (\Throwable $e) {
            return [
                'ok' => false,
                'status' => 'ERROR',
                'baseUrl' => $baseUrl,
                'models' => [],
                'error' => $this->sanitizeError($e->getMessage()),
            ];
        }
    }

    private function elapsedMs(float $startedAt): int
    {
        return (int) round((microtime(true) - $startedAt) * 1000);
    }

    /**
     * @return array<string,mixed>|null
     */
    private function decodeJsonObject(string $content): ?array
    {
        if ($content === '') {
            return null;
        }

        if (str_starts_with($content, '```')) {
            $content = (string) preg_replace('/^```[a-zA-Z0-9_-]*\s*/', '', $content);
            $content = (string) preg_replace('/\s*```$/', '', $content);
            $content = trim($content);
        }

        $decoded = json_decode($content, true);
        if (!is_array($decoded)) {
            return null;
        }

        return $decoded;
    }

    private function sanitizeError(string $message): string
    {
        $normalized = trim((string) preg_replace('/\s+/u', ' ', $message));

        return mb_substr($normalized, 0, 220);
    }

    private function readBoolEnv(string $key, bool $default): bool
    {
        $value = $this->readEnv($key, $default ? '1' : '0');
        $normalized = strtolower(trim((string) $value));

        if (in_array($normalized, ['1', 'true', 'yes', 'on'], true)) {
            return true;
        }

        if (in_array($normalized, ['0', 'false', 'no', 'off'], true)) {
            return false;
        }

        return $default;
    }

    private function readEnv(string $key, string $default): string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);

        if (!is_string($value)) {
            return $default;
        }

        $normalized = trim($value);

        return $normalized !== '' ? $normalized : $default;
    }
}
