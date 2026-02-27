<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OpenRouterAIService
{
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';
    private const MODEL = 'openai/gpt-3.5-turbo';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $apiKey
    ) {
    }

    public function sendMessage(array $messages): string
    {
        $response = $this->httpClient->request('POST', self::API_URL, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'HTTP-Referer' => $_SERVER['HTTP_HOST'] ?? 'localhost',
                'X-Title' => 'PULSE Shop Assistant',
            ],
            'json' => [
                'model' => self::MODEL,
                'messages' => array_merge([
                    ['role' => 'system', 'content' => 'Tu es un assistant virtuel pour la boutique PULSE. Aide les utilisateurs à trouver des produits, à comprendre les fonctionnalités du site et à répondre à leurs questions sur les jeux, tournois et produits disponibles. Sois toujours poli, professionnel et utile. Réponds en français.']
                ], $messages),
            ],
        ]);

        $data = $response->toArray();
        return $data['choices'][0]['message']['content'] ?? 'Désolé, je n\'ai pas pu traiter votre demande.';
    }
}
