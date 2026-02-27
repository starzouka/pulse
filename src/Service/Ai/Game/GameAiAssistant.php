<?php

declare(strict_types=1);

namespace App\Service\Ai\Game;

final class GameAiAssistant
{
    public function __construct(
        private readonly GameAiRemoteClient $remoteClient,
    ) {
    }

    /**
     * @param array<string, mixed> $context
     * @return array{
     *   suggestion:string,
     *   source:'remote'|'local_fallback',
     *   provider:string,
     *   model:string
     * }
     */
    public function suggest(array $context): array
    {
        $payload = json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (is_string($payload) && $payload !== '') {
            $remote = $this->remoteClient->chatJson(
                systemPrompt: 'Tu es un assistant catalogue jeu. Tu retournes uniquement un JSON valide.',
                userPrompt: <<<PROMPT
Genere une suggestion marketing concise en francais pour une fiche jeu.
Retourne exactement:
{
  "suggestion":"..."
}
Contraintes:
- 220 caracteres maximum
- ton pro et concret
- sans emoji

Contexte:
{$payload}
PROMPT,
                temperature: 0.6,
                maxTokens: 180,
            );

            $suggestion = trim((string) ($remote['suggestion'] ?? ''));
            if ($suggestion !== '') {
                return [
                    'suggestion' => $this->truncate($suggestion, 220),
                    'source' => 'remote',
                    'provider' => $this->remoteClient->getProvider(),
                    'model' => $this->remoteClient->getModel(),
                ];
            }
        }

        $name = trim((string) ($context['name'] ?? 'Ce jeu'));
        $publisher = trim((string) ($context['publisher'] ?? ''));
        $category = trim((string) ($context['category'] ?? 'e-sport'));

        $segments = [
            sprintf('%s cible une experience %s competitive et accessible.', $name !== '' ? $name : 'Ce jeu', $category !== '' ? $category : 'e-sport'),
            $publisher !== ''
                ? sprintf('Titre edite par %s, ideal pour des tournois frequents.', $publisher)
                : 'Titre adapte a un catalogue tourne vers la competition et les communautes actives.',
        ];

        return [
            'suggestion' => $this->truncate(implode(' ', $segments), 220),
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
