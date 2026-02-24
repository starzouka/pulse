<?php

declare(strict_types=1);

namespace App\Controller\Shared;

use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\User;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentParticipantTeamsLookupController extends AbstractController
{
    #[Route('/lookup/tournament-participants', name: 'lookup_tournament_participants', methods: ['GET'])]
    public function __invoke(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json([
                'teams' => [],
                'count' => 0,
                'message' => 'Authentication required.',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $tournamentId = $request->query->getInt('tournamentId', 0);
        if ($tournamentId <= 0) {
            return $this->json([
                'teams' => [],
                'count' => 0,
                'message' => 'Invalid tournamentId.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $tournament = $tournamentRepository->find($tournamentId);
        if (!$tournament instanceof Tournament) {
            return $this->json([
                'teams' => [],
                'count' => 0,
                'message' => 'Tournament not found.',
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        $isAdmin = $this->isGranted('ROLE_ADMIN');
        $isOrganizerOwner = $tournament->getOrganizerUserId()?->getUserId() === $user->getUserId();

        if (!$isAdmin && !$isOrganizerOwner) {
            return $this->json([
                'teams' => [],
                'count' => 0,
                'message' => 'Access denied for this tournament.',
            ], JsonResponse::HTTP_FORBIDDEN);
        }

        $registrations = $tournamentTeamRepository->findBy([
            'tournamentId' => $tournament,
            'status' => 'ACCEPTED',
        ]);

        $teamsById = [];
        foreach ($registrations as $registration) {
            $team = $registration->getTeamId();
            $teamId = $team?->getTeamId();
            if ($team instanceof Team && $teamId !== null) {
                $teamsById[$teamId] = [
                    'id' => $teamId,
                    'name' => (string) $team->getName(),
                ];
            }
        }

        $teams = array_values($teamsById);
        usort($teams, static fn (array $a, array $b): int => strcasecmp((string) $a['name'], (string) $b['name']));

        return $this->json([
            'teams' => $teams,
            'count' => count($teams),
        ]);
    }
}

