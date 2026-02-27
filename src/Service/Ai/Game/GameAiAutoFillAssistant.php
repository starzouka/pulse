<?php

declare(strict_types=1);

namespace App\Service\Ai\Game;

use App\Entity\Game;

final class GameAiAutoFillAssistant
{
    public function __construct(
        private readonly GameAiRemoteClient $remoteClient,
    ) {
    }

    /**
     * @param array<string, mixed> $context
     * @return array{
     *   name:string,
     *   description:string,
     *   publisher:string,
     *   status:string,
     *   source:'remote'|'local_fallback',
     *   provider:string,
     *   model:string
     * }
     */
    public function autofill(array $context): array
    {
        $default = $this->buildLocalFallback($context);
        $payload = json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (!is_string($payload) || $payload === '') {
            return $default;
        }

        $remote = $this->remoteClient->chatJson(
            systemPrompt: 'Tu es un assistant catalogue jeu. Tu retournes uniquement un JSON valide.',
            userPrompt: <<<PROMPT
Auto-complete une fiche jeu admin en francais.
Retourne exactement:
{
  "name":"...",
  "description":"...",
  "publisher":"...",
  "status":"DRAFT|PENDING|PUBLISHED|ARCHIVED"
}
Contraintes:
- name max 120 chars
- description max 500 chars
- status valide uniquement
- sans emoji

Contexte:
{$payload}
PROMPT,
            temperature: 0.55,
            maxTokens: 260,
        );

        if (!is_array($remote)) {
            return $default;
        }

        $status = strtoupper(trim((string) ($remote['status'] ?? $default['status'])));
        if (!in_array($status, Game::STATUSES, true)) {
            $status = $default['status'];
        }

        $name = trim((string) ($remote['name'] ?? $default['name']));
        $description = trim((string) ($remote['description'] ?? $default['description']));
        $publisher = trim((string) ($remote['publisher'] ?? $default['publisher']));

        if ($name === '' || $description === '') {
            return $default;
        }

        return [
            'name' => $this->truncate($name, 120),
            'description' => $this->truncate($description, 500),
            'publisher' => $this->truncate($publisher !== '' ? $publisher : $default['publisher'], 120),
            'status' => $status,
            'source' => 'remote',
            'provider' => $this->remoteClient->getProvider(),
            'model' => $this->remoteClient->getModel(),
        ];
    }

    /**
     * @param array<string, mixed> $context
     * @return array{
     *   name:string,
     *   description:string,
     *   publisher:string,
     *   status:string,
     *   source:'local_fallback',
     *   provider:string,
     *   model:string
     * }
     */
    private function buildLocalFallback(array $context): array
    {
        $name = trim((string) ($context['name'] ?? 'Nouveau jeu'));
        if ($name === '') {
            $name = 'Nouveau jeu';
        }

        $category = trim((string) ($context['category'] ?? 'e-sport'));
        $publisher = trim((string) ($context['publisher'] ?? 'Independant'));
        if ($publisher === '') {
            $publisher = 'Independant';
        }

        $description = sprintf(
            '%s est un titre %s axe sur la competition, la progression et les tournois communautaires. Le catalogue vise une experience stable pour les equipes et organisateurs.',
            $name,
            $category !== '' ? $category : 'e-sport'
        );

        return [
            'name' => $this->truncate($name, 120),
            'description' => $this->truncate($description, 500),
            'publisher' => $this->truncate($publisher, 120),
            'status' => Game::STATUS_PENDING,
            'source' => 'local_fallback',
            'provider' => 'local',
            'model' => 'template-v1',
        ];
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
