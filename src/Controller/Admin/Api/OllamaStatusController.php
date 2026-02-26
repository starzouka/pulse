<?php

declare(strict_types=1);

namespace App\Controller\Admin\Api;

use App\Service\Ai\OllamaClientService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class OllamaStatusController extends AbstractController
{
    #[Route('/admin/api/ai/ollama/status', name: 'admin_api_ai_ollama_status', methods: ['GET'])]
    public function __invoke(OllamaClientService $ollamaClientService): JsonResponse
    {
        $status = $ollamaClientService->status();

        return $this->json(
            [
                'success' => $status['ok'] === true,
                'message' => $status['ok'] === true
                    ? 'Ollama is reachable from Symfony.'
                    : 'Ollama is not reachable from Symfony.',
                'ollama' => $status,
            ],
            $status['ok'] === true ? JsonResponse::HTTP_OK : JsonResponse::HTTP_SERVICE_UNAVAILABLE
        );
    }
}
