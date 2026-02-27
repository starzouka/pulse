<?php

declare(strict_types=1);

namespace App\Controller\Front;

use App\Service\OpenRouterAIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\RateLimiter\Annotation\RateLimit;

final class AIAssistantController extends AbstractController
{
    #[Route('/api/assistant/chat', name: 'api_assistant_chat', methods: ['POST'])]
    #[RateLimit(limit: 10, period: '1 minute')]
    public function chat(Request $request, OpenRouterAIService $aiService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['message']) || empty(trim($data['message']))) {
            return $this->json(['error' => 'Message is required'], 400);
        }

        $messages = [
            ['role' => 'user', 'content' => $data['message']]
        ];

        try {
            $response = $aiService->sendMessage($messages);
            return $this->json(['response' => $response]);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Une erreur est survenue lors du traitement de votre demande.'], 500);
        }
    }
}
