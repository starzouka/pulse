<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\Category;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class GameAiAssistant
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
        private readonly string $openAiApiKey = '',
    ) {
    }

    /**
     * @param list<Category> $categories
     * @return array{description:string,status:string,category_id:int|null,tags:list<string>,source:string}
     */
    public function suggest(string $gameName, ?string $publisher, ?string $currentDescription, array $categories): array
    {
        $fallback = $this->buildFallback($gameName, $publisher, $currentDescription, $categories);

        if (trim($this->openAiApiKey) === '') {
            return $fallback + ['source' => 'fallback'];
        }

        try {
            $prompt = $this->buildPrompt($gameName, $publisher, $currentDescription, $categories);
            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->openAiApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-4o-mini',
                    'temperature' => 0.65,
                    'response_format' => ['type' => 'json_object'],
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'Tu es un assistant produit e-sport. Reponds uniquement en JSON valide, specifique au jeu.',
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                ],
                'timeout' => 15,
            ])->toArray(false);

            if (isset($response['error'])) {
                throw new \RuntimeException((string) ($response['error']['message'] ?? 'OpenAI API error'));
            }

            $content = $response['choices'][0]['message']['content'] ?? '';
            $decoded = $this->decodeJsonPayload($content);
            if (!is_array($decoded)) {
                return $fallback + ['source' => 'fallback_invalid_json'];
            }

            $description = trim((string) ($decoded['description'] ?? ''));
            $status = strtoupper(trim((string) ($decoded['status'] ?? 'PENDING')));
            if (!in_array($status, ['DRAFT', 'PENDING', 'PUBLISHED', 'ARCHIVED'], true)) {
                $status = 'PENDING';
            }

            $tags = array_values(array_filter(array_map(
                static fn (mixed $tag): string => trim((string) $tag),
                is_array($decoded['tags'] ?? null) ? $decoded['tags'] : []
            )));

            $categoryId = $this->resolveCategoryId((string) ($decoded['category_name'] ?? ''), $categories);

            return [
                'description' => $description !== '' ? $description : $fallback['description'],
                'status' => $status,
                'category_id' => $categoryId ?? $fallback['category_id'],
                'tags' => $tags !== [] ? $tags : $fallback['tags'],
                'source' => 'openai',
            ];
        } catch (\Throwable $exception) {
            $this->logger->warning('GameAiAssistant fallback', [
                'error' => $exception->getMessage(),
            ]);

            return $fallback + ['source' => 'fallback_exception'];
        }
    }

    /**
     * @param list<Category> $categories
     */
    private function buildPrompt(string $gameName, ?string $publisher, ?string $currentDescription, array $categories): string
    {
        $categoryNames = array_map(
            static fn (Category $category): string => (string) $category->getName(),
            $categories
        );

        return sprintf(
            "Jeu: %s\nPublisher: %s\nDescription actuelle: %s\nCategories possibles: %s\n\nReponds en JSON strict avec les cles: description, status, category_name, tags.\nContraintes: description FR concise (max 320), utile et specifique (pas de phrase generique), status parmi DRAFT/PENDING/PUBLISHED/ARCHIVED, tags 3 a 6 mots-cles e-sport.",
            trim($gameName),
            trim((string) $publisher),
            trim((string) $currentDescription),
            implode(', ', $categoryNames)
        );
    }

    /**
     * @param list<Category> $categories
     * @return array{description:string,status:string,category_id:int|null,tags:list<string>}
     */
    private function buildFallback(string $gameName, ?string $publisher, ?string $currentDescription, array $categories): array
    {
        $name = trim($gameName);
        $publisherValue = trim((string) $publisher);
        $descriptionSource = trim((string) $currentDescription);
        $description = $descriptionSource !== ''
            ? $descriptionSource
            : sprintf(
                '%s est un jeu competitif adapte aux tournois e-sport, avec un focus sur la strategie, la coordination equipe et des matchs structures.',
                $name !== '' ? $name : 'Ce jeu'
            );

        if ($publisherValue !== '') {
            $description .= ' Editeur: ' . $publisherValue . '.';
        }

        return [
            'description' => mb_substr($description, 0, 320),
            'status' => 'PENDING',
            'category_id' => $this->resolveCategoryId($name . ' ' . $description, $categories),
            'tags' => $this->inferTags($name . ' ' . $description),
        ];
    }

    /**
     * @param list<Category> $categories
     */
    private function resolveCategoryId(string $value, array $categories): ?int
    {
        $needle = mb_strtolower(trim($value));
        if ($needle === '') {
            return null;
        }

        foreach ($categories as $category) {
            $categoryName = mb_strtolower((string) $category->getName());
            if ($categoryName !== '' && str_contains($needle, $categoryName)) {
                return $category->getCategoryId();
            }
        }

        return $categories[0]->getCategoryId() ?? null;
    }

    /**
     * @return list<string>
     */
    private function inferTags(string $value): array
    {
        $text = mb_strtolower($value);
        $tags = [];

        if (str_contains($text, 'fps') || str_contains($text, 'shoot')) {
            $tags[] = 'FPS';
            $tags[] = 'Tactique';
        }
        if (str_contains($text, 'moba')) {
            $tags[] = 'MOBA';
        }
        if (str_contains($text, 'battle royale') || str_contains($text, 'br')) {
            $tags[] = 'BattleRoyale';
        }
        if ($tags === []) {
            $tags = ['eSport', 'Competition', 'Teamplay'];
        }

        return array_values(array_unique($tags));
    }

    /**
     * @return array<string, mixed>
     */
    private function decodeJsonPayload(mixed $content): array
    {
        if (is_array($content)) {
            $joined = '';
            foreach ($content as $chunk) {
                if (is_array($chunk) && isset($chunk['text'])) {
                    $joined .= (string) $chunk['text'];
                } elseif (is_string($chunk)) {
                    $joined .= $chunk;
                }
            }
            $content = $joined;
        }

        $raw = trim((string) $content);
        if ($raw === '') {
            throw new \RuntimeException('OpenAI returned empty content');
        }

        if (preg_match('/```(?:json)?\s*(\{.*\})\s*```/is', $raw, $matches) === 1) {
            $raw = trim((string) $matches[1]);
        }

        try {
            $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
            return is_array($decoded) ? $decoded : [];
        } catch (\Throwable) {
            $firstBrace = strpos($raw, '{');
            $lastBrace = strrpos($raw, '}');
            if ($firstBrace === false || $lastBrace === false || $lastBrace <= $firstBrace) {
                throw new \RuntimeException('Unable to extract JSON payload');
            }

            $slice = substr($raw, $firstBrace, ($lastBrace - $firstBrace) + 1);
            $decoded = json_decode($slice, true, 512, JSON_THROW_ON_ERROR);

            return is_array($decoded) ? $decoded : [];
        }
    }
}
