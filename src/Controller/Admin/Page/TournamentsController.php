<?php

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Repository\GameRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentsController extends AbstractController
{
    private const STATUSES = ['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'];
    private const SORTS = ['latest', 'oldest', 'title', 'prize', 'status'];

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
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $tournaments = $tournamentRepository->searchForAdmin($query, $status, $gameId, $sort, 500);

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
                'sort' => $sort,
            ],
            'statusOptions' => self::STATUSES,
            'sortOptions' => self::SORTS,
            'registrationsByTournamentId' => $registrationsByTournamentId,
            'acceptedByTournamentId' => $acceptedByTournamentId,
            'matchesByTournamentId' => $matchesByTournamentId,
            'counter' => count($tournaments),
        ]);
    }

    #[Route('/admin/tournaments/export/{format}', name: 'admin_tournaments_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        TableExportService $tableExportService,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $tournaments = $tournamentRepository->searchForAdmin($query, $status, $gameId, $sort, 5000);

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $acceptedByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['ACCEPTED']);
        $matchesByTournamentId = $tournamentMatchRepository->countByTournamentIds($tournamentIds);

        $headers = ['ID', 'Titre', 'Jeu', 'Organisateur', 'Status', 'Start date', 'End date', 'Equipes', 'Matchs', 'Prize pool'];
        $rows = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = (int) ($tournament->getTournamentId() ?? 0);
            $rows[] = [
                $tournamentId,
                (string) ($tournament->getTitle() ?? '-'),
                (string) ($tournament->getGameId()?->getName() ?? '-'),
                (string) ($tournament->getOrganizerUserId()?->getUsername() ?? '-'),
                (string) ($tournament->getStatus() ?? '-'),
                $tournament->getStartDate()?->format('Y-m-d') ?? '-',
                $tournament->getEndDate()?->format('Y-m-d') ?? '-',
                (int) ($acceptedByTournamentId[$tournamentId] ?? 0),
                (int) ($matchesByTournamentId[$tournamentId] ?? 0),
                (string) ($tournament->getPrizePool() ?? '0'),
            ];
        }

        $timestamp = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Tournois', $headers, $rows, sprintf('admin_tournaments_%s.xlsx', $timestamp));
        }

        return $tableExportService->exportPdf('Tournois', $headers, $rows, sprintf('admin_tournaments_%s.pdf', $timestamp));
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
