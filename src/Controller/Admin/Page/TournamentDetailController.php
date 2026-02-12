<?php

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentDetailController extends AbstractController
{
    #[Route('/admin/tournament-detail', name: 'admin_tournament_detail_legacy', methods: ['GET'])]
    #[Route('/admin/tournaments/{id}/detail', name: 'admin_tournament_detail', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        ?int $id = null,
    ): Response
    {
        if ($id === null) {
            $this->addFlash('error', 'Aucun tournoi selectionne.');
            return $this->redirectToRoute('admin_tournaments');
        }

        $tournament = $tournamentRepository->findOneWithRelationsById($id);
        if (!$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        $participants = $tournamentTeamRepository->findByTournamentOrdered($tournament);
        $matches = $tournamentMatchRepository->findByTournamentOrdered($tournament);
        $scoreboardRows = $this->buildScoreboard($matchTeamRepository->findByTournamentWithRelations($tournament));

        $matchesByStatus = [
            'FINISHED' => [],
            'ONGOING' => [],
            'SCHEDULED' => [],
        ];

        foreach ($matches as $match) {
            $status = strtoupper((string) ($match->getStatus() ?? 'SCHEDULED'));
            if (!array_key_exists($status, $matchesByStatus)) {
                $status = 'SCHEDULED';
            }

            $matchesByStatus[$status][] = $match;
        }

        return $this->render('admin/pages/tournament-detail.html.twig', [
            'tournament' => $tournament,
            'participants' => $participants,
            'matches' => $matches,
            'matchesByStatus' => $matchesByStatus,
            'scoreboardRows' => $scoreboardRows,
            'registeredCount' => count($participants),
            'acceptedCount' => $tournamentTeamRepository->countByTournament($tournament, ['ACCEPTED']),
            'matchesCount' => count($matches),
        ]);
    }

    /**
     * @param list<\App\Entity\MatchTeam> $matchTeams
     * @return list<array{team_name:string, played:int, wins:int, losses:int, points:int}>
     */
    private function buildScoreboard(array $matchTeams): array
    {
        $rows = [];

        foreach ($matchTeams as $matchTeam) {
            $team = $matchTeam->getTeamId();
            $match = $matchTeam->getMatchId();
            $teamId = $team?->getTeamId();
            if ($teamId === null) {
                continue;
            }

            if (!isset($rows[$teamId])) {
                $rows[$teamId] = [
                    'team_name' => (string) ($team->getName() ?? 'Equipe'),
                    'played' => 0,
                    'wins' => 0,
                    'losses' => 0,
                    'points' => 0,
                ];
            }

            if (strtoupper((string) ($match?->getStatus() ?? '')) !== 'FINISHED') {
                continue;
            }

            $rows[$teamId]['played']++;
            if ($matchTeam->isWinner() === true) {
                $rows[$teamId]['wins']++;
                $rows[$teamId]['points'] += 3;
            } elseif ($matchTeam->isWinner() === false) {
                $rows[$teamId]['losses']++;
            }
        }

        $table = array_values($rows);
        usort($table, static function (array $left, array $right): int {
            if ($left['points'] !== $right['points']) {
                return $right['points'] <=> $left['points'];
            }

            return $right['wins'] <=> $left['wins'];
        });

        return $table;
    }
}
