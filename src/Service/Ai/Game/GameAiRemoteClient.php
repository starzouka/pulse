<?php

declare(strict_types=1);

namespace App\Service\Ai\Game;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class GameAiRemoteClient
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
    ) {
    }

    public function isEnabled(): bool
    {
        if ($this->getApiKey() === '') {
            return false;
        }

        return $this->readEnvBool('PULSE_AI_ENABLE_REMOTE', true);
    }

    public function getProvider(): string
    {
        return 'openai';
    }

    public function getModel(): string
    {
        return $this->readEnv('OPENAI_MODEL', 'gpt-4o-mini');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function chatJson(string $systemPrompt, string $userPrompt, float $temperature, int $maxTokens): ?array
    {
        if (!$this->isEnabled()) {
            return null;
        }

        try {
            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->getApiKey(),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $this->getModel(),
                    'temperature' => $temperature,
                    'max_tokens' => $maxTokens,
                    'response_format' => ['type' => 'json_object'],
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
                'timeout' => 12,
            ]);

            $payload = $response->toArray(false);
            $content = trim((string) ($payload['choices'][0]['message']['content'] ?? ''));
            if ($content === '') {
                return null;
            }

            return $this->decodeJsonPayload($content);
        } catch (\Throwable $exception) {
            $this->logger->warning('Game AI OpenAI call failed.', [
                'model' => $this->getModel(),
                'error' => $exception->getMessage(),
            ]);

            return null;
        }
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

    private function getApiKey(): string
    {
        return $this->readEnv('OPENAI_API_KEY', '');
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

    private function readEnvBool(string $key, bool $default): bool
    {
        $value = strtolower($this->readEnv($key, $default ? '1' : '0'));
        if (in_array($value, ['1', 'true', 'yes', 'on'], true)) {
            return true;
        }

        if (in_array($value, ['0', 'false', 'no', 'off'], true)) {
            return false;
        }

        return $default;
    }
}
