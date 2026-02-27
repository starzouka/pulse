<?php

declare(strict_types=1);

namespace App\Service\Ai;

use App\Entity\Category;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class GameAiAutoFillAssistant
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
        private readonly string $openAiApiKey = '',
    ) {
    }

    /**
     * @param list<Category> $categories
     * @return array{name:string,publisher:string,description:string,status:string,category_id:int|null,tags:list<string>,source:string}
     */
    public function fillForm(string $brief, array $categories, string $currentName = '', string $currentPublisher = ''): array
    {
        $fallback = $this->buildFallback($brief, $categories, $currentName, $currentPublisher);

        if (trim($this->openAiApiKey) === '') {
            return $fallback + ['source' => 'autofill_fallback'];
        }

        try {
            $categoriesList = array_map(
                static fn (Category $category): string => (string) $category->getName(),
                $categories
            );

            $prompt = sprintf(
                "Brief: %s\nNom actuel: %s\nPublisher actuel: %s\nCategories possibles: %s\n\nTu dois generer un contenu SPECIFIQUE au brief, pas de texte generic repetitif.\nContraintes:\n- Reponds uniquement en JSON avec: name, publisher, description, status, category_name, tags.\n- status doit etre DRAFT ou PENDING ou PUBLISHED ou ARCHIVED.\n- description en francais, unique, concrete, orientee gameplay/competition (max 320 caracteres).\n- tags: 3 a 6 tags pertinents (genre, mode, skill, plateforme).",
                trim($brief),
                trim($currentName),
                trim($currentPublisher),
                implode(', ', $categoriesList),
            );

            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->openAiApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-4o-mini',
                    'temperature' => 0.7,
                    'response_format' => ['type' => 'json_object'],
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'Tu es un assistant produit gaming expert e-sport. Reponds strictement en JSON valide.',
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                ],
                'timeout' => 20,
            ])->toArray(false);

            if (isset($response['error'])) {
                throw new \RuntimeException((string) ($response['error']['message'] ?? 'OpenAI API error'));
            }

            $content = $response['choices'][0]['message']['content'] ?? '';
            $decoded = $this->decodeJsonPayload($content);
            if (!is_array($decoded)) {
                return $fallback + ['source' => 'autofill_fallback_invalid_json'];
            }

            $name = trim((string) ($decoded['name'] ?? ''));
            $publisher = trim((string) ($decoded['publisher'] ?? ''));
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
                'name' => $name !== '' ? $name : $fallback['name'],
                'publisher' => $publisher !== '' ? $publisher : $fallback['publisher'],
                'description' => $description !== '' ? mb_substr($description, 0, 320) : $fallback['description'],
                'status' => $status,
                'category_id' => $categoryId ?? $fallback['category_id'],
                'tags' => $tags !== [] ? $tags : $fallback['tags'],
                'source' => 'openai_autofill',
            ];
        } catch (\Throwable $exception) {
            $this->logger->warning('GameAiAutoFillAssistant fallback', [
                'error' => $exception->getMessage(),
            ]);

            return $fallback + ['source' => 'autofill_fallback_exception'];
        }
    }

    /**
     * @param list<Category> $categories
     * @return array{name:string,publisher:string,description:string,status:string,category_id:int|null,tags:list<string>}
     */
    private function buildFallback(string $brief, array $categories, string $currentName, string $currentPublisher): array
    {
        $briefValue = trim($brief);
        $name = trim($currentName) !== '' ? trim($currentName) : $this->extractNameFromBrief($briefValue);
        $publisher = trim($currentPublisher) !== '' ? trim($currentPublisher) : $this->extractPublisherFromBrief($briefValue);

        $description = sprintf(
            '%s est un jeu competitif structure pour le e-sport. %s',
            $name !== '' ? $name : 'Ce jeu',
            $briefValue !== '' ? mb_substr($briefValue, 0, 220) : 'Gameplay axe teamplay et progression.'
        );

        return [
            'name' => $name !== '' ? $name : 'Nouveau jeu',
            'publisher' => $publisher,
            'description' => mb_substr($description, 0, 320),
            'status' => 'PENDING',
            'category_id' => $this->resolveCategoryId($briefValue . ' ' . $name, $categories),
            'tags' => ['eSport', 'Teamplay', 'Competitive'],
        ];
    }

    /**
     * @param list<Category> $categories
     */
    private function resolveCategoryId(string $value, array $categories): ?int
    {
        $needle = mb_strtolower(trim($value));
        if ($needle !== '') {
            foreach ($categories as $category) {
                $categoryName = mb_strtolower((string) $category->getName());
                if ($categoryName !== '' && str_contains($needle, $categoryName)) {
                    return $category->getCategoryId();
                }
            }
        }

        return $categories[0]->getCategoryId() ?? null;
    }

    private function extractNameFromBrief(string $brief): string
    {
        if ($brief === '') {
            return '';
        }

        $firstWords = preg_split('/\s+/', $brief, 4) ?: [];
        return trim(implode(' ', array_slice($firstWords, 0, 2)));
    }

    private function extractPublisherFromBrief(string $brief): string
    {
        if (preg_match('/publisher[:\s]+([a-zA-Z0-9 _-]+)/i', $brief, $matches) === 1) {
            return trim((string) ($matches[1] ?? ''));
        }

        return '';
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

        // Some models may still return fenced JSON.
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
