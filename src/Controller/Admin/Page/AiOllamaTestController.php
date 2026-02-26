<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Service\Ai\OllamaClientService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AiOllamaTestController extends AbstractController
{
    #[Route('/admin/ai/ollama-test', name: 'admin_ai_ollama_test', methods: ['GET', 'POST'])]
    public function index(Request $request, OllamaClientService $ollamaClientService): Response
    {
        $health = [
            'enabled' => $ollamaClientService->isEnabled(),
            'baseUrl' => $ollamaClientService->getBaseUrl(),
            'model' => $ollamaClientService->getChatModel(),
            'timeoutSeconds' => $ollamaClientService->getTimeoutSeconds(),
            'ping' => $ollamaClientService->ping(),
        ];

        $modelsPayload = $ollamaClientService->listModels();

        $scenario = trim((string) $request->request->get(
            'scenario',
            'Verifier la coherence d un match FINISHED avec score 2-1 et un winner unique.'
        ));
        $testResult = null;

        if ($request->isMethod('POST')) {
            $testResult = $ollamaClientService->chatJson(
                implode("\n", [
                    'Return ONLY a JSON object.',
                    'Write short French text (ASCII only).',
                    'JSON shape: {"ok":true,"summary":"...","checks":["...","..."]}',
                ]),
                "Scenario admin test:\n" . $scenario
            );
        }

        return $this->render('admin/pages/ai-ollama-test.html.twig', [
            'ollamaHealth' => $health,
            'ollamaModelsPayload' => $modelsPayload,
            'scenario' => $scenario,
            'ollamaTestResult' => $testResult,
        ]);
    }
}
