<?php

declare(strict_types=1);

namespace App\Controller\Admin\Api;

use App\Repository\TournamentRequestRepository;
use App\Service\Ai\TournamentRequestAiAssistantService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentRequestAiReviewController extends AbstractController
{
    #[Route('/admin/api/ai/tournament-requests/{id}/review', name: 'admin_api_ai_tournament_request_review', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function __invoke(
        int $id,
        TournamentRequestRepository $tournamentRequestRepository,
        TournamentRequestAiAssistantService $tournamentRequestAiAssistantService,
    ): JsonResponse {
        $tournamentRequest = $tournamentRequestRepository->find($id);
        if ($tournamentRequest === null) {
            return $this->json([
                'success' => false,
                'error' => 'Tournament request not found.',
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        $analysis = $tournamentRequestAiAssistantService->analyze($tournamentRequest);
        $success = ($analysis['success'] ?? false) === true;

        return $this->json(
            [
                'success' => $success,
                'analysis' => $analysis,
            ],
            JsonResponse::HTTP_OK
        );
    }
}
