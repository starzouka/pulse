<?php

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Repository\GameRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentsController extends AbstractController
{
    private const STATUSES = ['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'];

    #[Route('/admin/tournaments', name: 'admin_tournaments', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        GameRepository $gameRepository,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;

        $tournaments = $tournamentRepository->searchForAdmin($query, $status, $gameId, 500);

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $registrationsByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);
        $acceptedByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['ACCEPTED']);
        $matchesByTournamentId = $tournamentMatchRepository->countByTournamentIds($tournamentIds);

        return $this->render('admin/pages/tournaments.html.twig', [
            'tournaments' => $tournaments,
            'availableGames' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => [
                'q' => $query,
                'status' => $status,
                'game' => $gameId,
            ],
            'statusOptions' => self::STATUSES,
            'registrationsByTournamentId' => $registrationsByTournamentId,
            'acceptedByTournamentId' => $acceptedByTournamentId,
            'matchesByTournamentId' => $matchesByTournamentId,
        ]);
    }

    #[Route('/admin/tournaments/{id}/delete', name: 'admin_tournament_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        TournamentRepository $tournamentRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $token = (string) $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete_tournament_' . $id, $token)) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_tournaments');
        }

        $tournament = $tournamentRepository->find($id);
        if (!$tournament instanceof Tournament) {
            $this->addFlash('error', 'Tournoi introuvable.');
            return $this->redirectToRoute('admin_tournaments');
        }

        try {
            $entityManager->remove($tournament);
            $entityManager->flush();
            $this->addFlash('success', 'Le tournoi a ete supprime.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible pour ce tournoi.');
        }

        return $this->redirectToRoute('admin_tournaments');
    }
}
