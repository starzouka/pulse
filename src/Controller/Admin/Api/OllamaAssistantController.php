<?php

declare(strict_types=1);

namespace App\Controller\Admin\Api;

use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRequestRepository;
use App\Service\Ai\TournamentAiAssistantService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/api/ai', name: 'admin_api_ai_')]
final class OllamaAssistantController extends AbstractController
{
    #[Route('/health', name: 'health', methods: ['GET'])]
    public function health(TournamentAiAssistantService $assistant): JsonResponse
    {
        return $this->json($assistant->health());
    }

    #[Route('/tournament-requests/{id}/analysis', name: 'tournament_request_analysis', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function analyzeTournamentRequest(
        int $id,
        TournamentRequestRepository $tournamentRequestRepository,
        TournamentAiAssistantService $assistant,
    ): JsonResponse {
        $request = $tournamentRequestRepository->findOneWithRelationsById($id);
        if ($request === null) {
            return $this->json([
                'error' => 'Demande de tournoi introuvable.',
                'id' => $id,
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json($assistant->analyzeTournamentRequest($request));
    }

    #[Route('/matches/{id}/analysis', name: 'match_analysis', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function analyzeMatch(
        int $id,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TournamentAiAssistantService $assistant,
    ): JsonResponse {
        $match = $tournamentMatchRepository->findOneWithContextById($id);
        if ($match === null) {
            return $this->json([
                'error' => 'Match introuvable.',
                'id' => $id,
            ], Response::HTTP_NOT_FOUND);
        }

        $matchTeams = $matchTeamRepository->findByMatchWithTeam($match);

        return $this->json($assistant->analyzeMatch($match, $matchTeams));
    }
}

