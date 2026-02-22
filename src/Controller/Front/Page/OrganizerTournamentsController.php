<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentsController extends AbstractController
{
    private const STATUSES = ['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'];
    private const SORTS = ['latest', 'oldest', 'title', 'status'];

    #[Route('/pages/organizer-tournaments', name: 'front_organizer_tournaments', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        GameRepository $gameRepository,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $organizerUserId = (int) ($user->getUserId() ?? 0);
        $tournaments = $organizerUserId > 0
            ? $tournamentRepository->searchForOrganizer($organizerUserId, $query, $status, $gameId, $sort, 500)
            : [];

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $registrationsByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);

        return $this->render('front/pages/organizer-tournaments.html.twig', [
            'tournaments' => $tournaments,
            'registrationsByTournamentId' => $registrationsByTournamentId,
            'availableGames' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => [
                'q' => $query,
                'status' => $status,
                'game' => $gameId,
                'sort' => $sort,
            ],
            'statusOptions' => self::STATUSES,
            'sortOptions' => self::SORTS,
            'counter' => count($tournaments),
        ]);
    }
}
