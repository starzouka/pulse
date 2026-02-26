<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\Team;
use App\Entity\User;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class InvitationMessageAssistant
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $openAiApiKey = '',
        private readonly string $openAiModel = 'gpt-4o-mini',
        private readonly bool $remoteEnabled = false,
    ) {
    }

    public function generateTeamInviteMessage(Team $team, User $captain, User $candidate): string
    {
        $fallback = $this->buildTemplateMessage($team, $captain, $candidate);

        if (!$this->remoteEnabled || trim($this->openAiApiKey) === '') {
            return $fallback;
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
                        [
                            'role' => 'system',
                            'content' => 'Generate a concise, respectful esports team invitation in French. Max 220 characters.',
                        ],
                        [
                            'role' => 'user',
                            'content' => sprintf(
                                'Team: %s; Region: %s; Captain: %s; Candidate: %s (@%s); Return plain text only.',
                                (string) ($team->getName() ?? 'Equipe'),
                                (string) ($team->getRegion() ?? 'N/A'),
                                (string) ($captain->getDisplayName() ?: $captain->getUsername() ?: 'Capitaine'),
                                (string) ($candidate->getDisplayName() ?: $candidate->getUsername() ?: 'Joueur'),
                                (string) ($candidate->getUsername() ?? 'user')
                            ),
                        ],
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 90,
                ],
                'timeout' => 10,
            ]);

            $payload = $response->toArray(false);
            $content = trim((string) ($payload['choices'][0]['message']['content'] ?? ''));
            if ($content !== '') {
                return mb_substr(preg_replace('/\s+/', ' ', $content) ?? $content, 0, 255);
            }
        } catch (\Throwable) {
            // Fallback to deterministic local generation.
        }

        return $fallback;
    }

    private function buildTemplateMessage(Team $team, User $captain, User $candidate): string
    {
        $teamName = trim((string) ($team->getName() ?? 'notre equipe'));
        $region = trim((string) ($team->getRegion() ?? ''));
        $captainName = trim((string) ($captain->getDisplayName() ?: $captain->getUsername() ?: 'Le capitaine'));
        $candidateName = trim((string) ($candidate->getDisplayName() ?: $candidate->getUsername() ?: 'joueur'));

        $parts = [
            sprintf('Salut %s,', $candidateName),
            sprintf("je suis %s, capitaine de %s.", $captainName, $teamName),
        ];
        if ($region !== '') {
            $parts[] = sprintf('Nous recrutons pour notre roster (%s).', $region);
        } else {
            $parts[] = 'Nous recrutons pour notre roster.';
        }
        $parts[] = 'Ton profil nous intéresse, ça te dit de rejoindre l’équipe ?';

        return mb_substr(implode(' ', $parts), 0, 255);
    }
}

