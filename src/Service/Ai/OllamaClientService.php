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

    public function getBaseUrl(): string
    {
        $configured = $this->getEnvString('OLLAMA_BASE_URL');

        return $configured !== '' ? rtrim($configured, '/') : 'http://127.0.0.1:11434';
    }

    public function getDefaultChatModel(): string
    {
        $configured = $this->getEnvString('OLLAMA_CHAT_MODEL');

        return $configured !== '' ? $configured : 'gemma3:4b';
    }

    public function getDefaultEmbeddingModel(): string
    {
        $configured = $this->getEnvString('OLLAMA_EMBEDDING_MODEL');

        return $configured !== '' ? $configured : 'nomic-embed-text';
    }

    /**
     * @return array{
     *   ok: bool,
     *   base_url: string,
     *   chat_model: string,
     *   embedding_model: string,
     *   models: list<string>,
     *   error: ?string
     * }
     */
    public function status(): array
    {
        $result = $this->requestJson('GET', '/api/tags', null, 8);

        if (!$result['ok']) {
            return [
                'ok' => false,
                'base_url' => $this->getBaseUrl(),
                'chat_model' => $this->getDefaultChatModel(),
                'embedding_model' => $this->getDefaultEmbeddingModel(),
                'models' => [],
                'error' => $result['error'],
            ];
        }

        $data = $result['data'];
        $models = [];
        $rawModels = $data['models'] ?? [];
        if (is_array($rawModels)) {
            foreach ($rawModels as $rawModel) {
                if (!is_array($rawModel)) {
                    continue;
                }

                $name = trim((string) ($rawModel['name'] ?? ''));
                if ($name !== '') {
                    $models[] = $name;
                }
            }
        }

        return [
            'ok' => true,
            'base_url' => $this->getBaseUrl(),
            'chat_model' => $this->getDefaultChatModel(),
            'embedding_model' => $this->getDefaultEmbeddingModel(),
            'models' => $models,
            'error' => null,
        ];
    }

    /**
     * @param list<array{role:string, content:string}> $messages
     * @return array{ok: bool, data: array<string, mixed>, error: ?string}
     */
    public function chat(array $messages, ?string $model = null, bool $jsonMode = false): array
    {
        $payload = [
            'model' => $model !== null && trim($model) !== '' ? trim($model) : $this->getDefaultChatModel(),
            'messages' => $messages,
            'stream' => false,
        ];

        if ($jsonMode) {
            $payload['format'] = 'json';
        }

        return $this->requestJson('POST', '/api/chat', $payload, 90);
    }

    /**
     * @return array{ok: bool, data: array<string, mixed>, error: ?string}
     */
    private function requestJson(string $method, string $path, ?array $jsonPayload, int $timeoutSeconds): array
    {
        $options = [
            'timeout' => $timeoutSeconds,
            'max_duration' => $timeoutSeconds,
        ];

        if (is_array($jsonPayload)) {
            $options['json'] = $jsonPayload;
        }

        try {
            $response = $this->httpClient->request(
                strtoupper($method),
                $this->getBaseUrl() . $path,
                $options,
            );

            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false);

            if ($statusCode < 200 || $statusCode >= 300) {
                return [
                    'ok' => false,
                    'data' => is_array($data) ? $data : [],
                    'error' => sprintf('HTTP %d from Ollama.', $statusCode),
                ];
            }

            if (!is_array($data)) {
                return [
                    'ok' => false,
                    'data' => [],
                    'error' => 'Unexpected Ollama response format.',
                ];
            }

            return [
                'ok' => true,
                'data' => $data,
                'error' => null,
            ];
        } catch (\Throwable $exception) {
            return [
                'ok' => false,
                'data' => [],
                'error' => $exception->getMessage(),
            ];
        }
    }

    private function getEnvString(string $key): string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key) ?: '';

        return is_string($value) ? trim($value) : '';
    }
}
