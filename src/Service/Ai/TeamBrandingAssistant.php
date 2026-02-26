<?php

declare(strict_types=1);

namespace App\Service\Ai;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class TeamBrandingAssistant
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $openAiApiKey = '',
        private readonly string $openAiModel = 'gpt-4o-mini',
        private readonly bool $remoteEnabled = false,
    ) {
    }

    /**
     * @return array{bio:string,slogan:string,source:string}
     */
    public function generate(string $teamName, ?string $region = null, ?string $style = null): array
    {
        $teamName = trim($teamName);
        $region = trim((string) $region);
        $style = trim((string) $style);

        $fallback = $this->fallback($teamName !== '' ? $teamName : 'Team Pulse', $region, $style);

        if (!$this->remoteEnabled || trim($this->openAiApiKey) === '') {
            return $fallback + ['source' => 'local-template'];
        }

        try {
            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . trim($this->openAiApiKey),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => trim($this->openAiModel) !== '' ? trim($this->openAiModel) : 'gpt-4o-mini',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Generate a short esports team bio and slogan in French. Return JSON with keys bio and slogan only.'],
                        ['role' => 'user', 'content' => sprintf('team=%s; region=%s; style=%s', $teamName, $region, $style)],
                    ],
                    'temperature' => 0.8,
                    'response_format' => ['type' => 'json_object'],
                ],
                'timeout' => 12,
            ]);
            $payload = $response->toArray(false);
            $content = (string) ($payload['choices'][0]['message']['content'] ?? '');
            $parsed = json_decode($content, true);
            if (is_array($parsed)) {
                $bio = trim((string) ($parsed['bio'] ?? ''));
                $slogan = trim((string) ($parsed['slogan'] ?? ''));
                if ($bio !== '' && $slogan !== '') {
                    return [
                        'bio' => mb_substr($bio, 0, 1000),
                        'slogan' => mb_substr($slogan, 0, 120),
                        'source' => 'openai',
                    ];
                }
            }
        } catch (\Throwable) {
            // Fallback below.
        }

        return $fallback + ['source' => 'local-template'];
    }

    /**
     * @return array{bio:string,slogan:string}
     */
    private function fallback(string $teamName, string $region, string $style): array
    {
        $tone = $style !== '' ? $style : 'compétitif et discipliné';
        $regionPart = $region !== '' ? sprintf('basée à %s', $region) : 'active sur la scène e-sport';

        return [
            'bio' => sprintf(
                "%s est une équipe e-sport %s, %s. Nous construisons un roster solide, orienté performance, communication et progression continue en tournoi.",
                $teamName,
                $tone,
                $regionPart
            ),
            'slogan' => sprintf('%s: discipline, vision, victoire.', $teamName),
        ];
    }
}

