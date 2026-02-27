<?php

declare(strict_types=1);

namespace App\Service\Ai\Generation;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OpenAiRemoteContentGenerationService implements RemoteContentGenerationInterface
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
    ) {
    }

    public function isEnabled(): bool
    {
        return $this->readEnvBool('PULSE_AI_ENABLE_REMOTE', false) && $this->getApiKey() !== '';
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
     * @param array<string, mixed> $context
     */
    public function generateInvitationMessage(array $context): ?string
    {
        if (!$this->isEnabled()) {
            return null;
        }

        $payload = json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (!is_string($payload) || $payload === '') {
            return null;
        }

        $systemPrompt = 'Tu es un assistant e-sport. Tu retournes uniquement un JSON valide.';
        $userPrompt = <<<PROMPT
Genere un message d'invitation en francais, naturel, professionnel et court.
Retourne exactement:
{
  "message":"..."
}
Contraintes:
- max 220 caracteres
- ton cordial
- contextualise avec equipe/capitaine/joueur
- aucun emoji

Donnees:
{$payload}
PROMPT;

        $result = $this->chatJson($systemPrompt, $userPrompt, 0.6, 180);
        if (!is_array($result)) {
            return null;
        }

        $message = trim((string) ($result['message'] ?? ''));
        if ($message === '') {
            return null;
        }

        return $this->truncate($message, 220);
    }

    /**
     * @param array<string, mixed> $context
     * @return array{bio:string,slogan:string}|null
     */
    public function generateTeamBranding(array $context): ?array
    {
        if (!$this->isEnabled()) {
            return null;
        }

        $payload = json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (!is_string($payload) || $payload === '') {
            return null;
        }

        $systemPrompt = 'Tu es un assistant branding e-sport. Tu retournes uniquement un JSON valide.';
        $userPrompt = <<<PROMPT
Genere un branding d'equipe en francais.
Retourne exactement:
{
  "bio":"...",
  "slogan":"..."
}
Contraintes:
- bio max 300 caracteres
- slogan max 70 caracteres
- style e-sport clair et memorisable
- pas de promesse irrealiste

Donnees:
{$payload}
PROMPT;

        $result = $this->chatJson($systemPrompt, $userPrompt, 0.7, 220);
        if (!is_array($result)) {
            return null;
        }

        $bio = trim((string) ($result['bio'] ?? ''));
        $slogan = trim((string) ($result['slogan'] ?? ''));
        if ($bio === '' || $slogan === '') {
            return null;
        }

        return [
            'bio' => $this->truncate($bio, 300),
            'slogan' => $this->truncate($slogan, 70),
        ];
    }

    /**
     * @return array<string, mixed>|null
     */
    private function chatJson(string $systemPrompt, string $userPrompt, float $temperature, int $maxTokens): ?array
    {
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
            $this->logger->warning('OpenAI remote generation failed.', [
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

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}

