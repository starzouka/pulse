<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\MatchTeam;
use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentTeam;
use App\Entity\User;
use App\Repository\MatchTeamRepository;
use App\Repository\TeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentDetailController extends AbstractController
{
    #[Route('/pages/tournament-detail/{id}', name: 'front_tournament_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TeamRepository $teamRepository,
    ): Response {
        $tournament = $this->resolveTournament($id, $tournamentRepository);
        if (!$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        $participants = $tournamentTeamRepository->findByTournamentOrdered($tournament);
        $registeredCount = $tournamentTeamRepository->countByTournament($tournament, ['PENDING', 'ACCEPTED']);
        $acceptedCount = $tournamentTeamRepository->countByTournament($tournament, ['ACCEPTED']);

        $matches = $tournamentMatchRepository->findByTournamentOrdered($tournament);
        $matchesFinished = [];
        $matchesOngoing = [];
        $matchesUpcoming = [];

        foreach ($matches as $match) {
            $matchStatus = strtoupper((string) ($match->getStatus() ?? 'SCHEDULED'));
            if ($matchStatus === 'FINISHED') {
                $matchesFinished[] = $match;
                continue;
            }

            if ($matchStatus === 'ONGOING') {
                $matchesOngoing[] = $match;
                continue;
            }

            $matchesUpcoming[] = $match;
        }

        $totalMatches = count($matches);
        $finishedMatchesCount = count($matchesFinished);
        $progressPercent = $totalMatches > 0
            ? (int) round(($finishedMatchesCount / $totalMatches) * 100)
            : 0;

        $scoreboardRows = $this->buildScoreboard($matchTeamRepository->findByTournamentWithRelations($tournament));

        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;
        $captainTeams = [];
        $captainParticipationsByTeamId = [];

        if ($viewerUser instanceof User) {
            $captainTeams = $teamRepository->findByCaptainUser($viewerUser, 100);
            $captainParticipations = $tournamentTeamRepository->findByTournamentAndTeams($tournament, $captainTeams);
            foreach ($captainParticipations as $captainParticipation) {
                $teamId = $captainParticipation->getTeamId()?->getTeamId();
                if ($teamId === null) {
                    continue;
                }

                $captainParticipationsByTeamId[$teamId] = $captainParticipation->getStatus();
            }
        }

        $registrationOpen = $this->isRegistrationOpen($tournament, $acceptedCount);

        return $this->render('front/pages/tournament-detail.html.twig', [
            'tournament' => $tournament,
            'participants' => $participants,
            'registered_count' => $registeredCount,
            'accepted_count' => $acceptedCount,
            'matches_total' => $totalMatches,
            'matches_finished_count' => $finishedMatchesCount,
            'progress_percent' => max(0, min(100, $progressPercent)),
            'matches_finished' => $matchesFinished,
            'matches_ongoing' => $matchesOngoing,
            'matches_upcoming' => $matchesUpcoming,
            'scoreboard_rows' => $scoreboardRows,
            'viewer_user' => $viewerUser,
            'captain_teams' => $captainTeams,
            'captain_participations_by_team_id' => $captainParticipationsByTeamId,
            'registration_open' => $registrationOpen,
        ]);
    }

    #[Route('/pages/tournament-detail/{id}/participate', name: 'front_tournament_participate', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function participate(
        int $id,
        Request $request,
        TournamentRepository $tournamentRepository,
        TeamRepository $teamRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $this->generateUrl('front_tournament_detail', ['id' => $id]),
            ]);
        }

        if (!$this->isCsrfTokenValid('tournament_participate_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
        }

        $tournament = $tournamentRepository->find($id);
        if (!$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        $captainTeams = $teamRepository->findByCaptainUser($viewer, 100);
        if ($captainTeams === []) {
            $this->addFlash('error', 'Seul un capitaine peut participer a un tournoi.');
            return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
        }

        $selectedTeamId = (int) $request->request->get('team_id', 0);
        if ($selectedTeamId <= 0 && count($captainTeams) === 1) {
            $selectedTeamId = (int) ($captainTeams[0]->getTeamId() ?? 0);
        }

        $selectedTeam = null;
        foreach ($captainTeams as $captainTeam) {
            if ($captainTeam->getTeamId() === $selectedTeamId) {
                $selectedTeam = $captainTeam;
                break;
            }
        }

        if (!$selectedTeam instanceof Team) {
            $this->addFlash('error', 'Equipe invalide. Selectionnez une equipe de votre capitaine.');
            return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
        }

        $existingParticipation = $tournamentTeamRepository->findOneByTournamentAndTeam($tournament, $selectedTeam);
        if ($existingParticipation instanceof TournamentTeam && in_array(strtoupper((string) $existingParticipation->getStatus()), ['PENDING', 'ACCEPTED'], true)) {
            $this->addFlash('info', 'Cette equipe est deja inscrite (ou en attente) pour ce tournoi.');
            return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
        }

        $acceptedCount = $tournamentTeamRepository->countByTournament($tournament, ['ACCEPTED']);
        if (!$this->isRegistrationOpen($tournament, $acceptedCount)) {
            $this->addFlash('error', 'Les inscriptions sont fermees pour ce tournoi.');
            return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
        }

        $targetStatus = strtoupper((string) $tournament->getRegistrationMode()) === 'OPEN' ? 'ACCEPTED' : 'PENDING';

        if ($existingParticipation instanceof TournamentTeam) {
            $existingParticipation
                ->setStatus($targetStatus)
                ->setRegisteredAt(new \DateTime())
                ->setDecidedAt(null)
                ->setDecidedByUserId(null)
                ->setCheckedIn(false)
                ->setCheckinAt(null);
        } else {
            $newParticipation = (new TournamentTeam())
                ->setTournamentId($tournament)
                ->setTeamId($selectedTeam)
                ->setStatus($targetStatus)
                ->setSeed(null)
                ->setRegisteredAt(new \DateTime())
                ->setDecidedAt(null)
                ->setDecidedByUserId(null)
                ->setCheckedIn(false)
                ->setCheckinAt(null);
            $entityManager->persist($newParticipation);
        }

        $entityManager->flush();

        if ($targetStatus === 'ACCEPTED') {
            $this->addFlash('success', 'Equipe inscrite avec succes au tournoi.');
        } else {
            $this->addFlash('success', 'Demande de participation envoyee avec succes.');
        }

        return $this->redirectToRoute('front_tournament_detail', ['id' => $id]);
    }

    private function isRegistrationOpen(Tournament $tournament, int $acceptedCount): bool
    {
        $status = strtoupper((string) ($tournament->getStatus() ?? ''));
        if ($status !== 'OPEN') {
            return false;
        }

        $maxTeams = (int) ($tournament->getMaxTeams() ?? 0);
        if ($maxTeams > 0 && $acceptedCount >= $maxTeams) {
            return false;
        }

        $registrationDeadline = $tournament->getRegistrationDeadline();
        if ($registrationDeadline instanceof \DateTimeInterface) {
            $today = new \DateTimeImmutable('today');
            if ($registrationDeadline < $today) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param list<MatchTeam> $matchTeams
     * @return list<array{
     *   team_id: int,
     *   team_name: string,
     *   played: int,
     *   wins: int,
     *   losses: int,
     *   points: int
     * }>
     */
    private function buildScoreboard(array $matchTeams): array
    {
        $rowsByTeamId = [];

        foreach ($matchTeams as $matchTeam) {
            $team = $matchTeam->getTeamId();
            $match = $matchTeam->getMatchId();

            $teamId = $team?->getTeamId();
            if ($teamId === null) {
                continue;
            }

            if (!isset($rowsByTeamId[$teamId])) {
                $rowsByTeamId[$teamId] = [
                    'team_id' => $teamId,
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

            $rowsByTeamId[$teamId]['played']++;
            $isWinner = $matchTeam->isWinner();

            if ($isWinner === true) {
                $rowsByTeamId[$teamId]['wins']++;
                $rowsByTeamId[$teamId]['points'] += 3;
                continue;
            }

            if ($isWinner === false) {
                $rowsByTeamId[$teamId]['losses']++;
            }
        }

        $rows = array_values($rowsByTeamId);
        usort($rows, static function (array $left, array $right): int {
            if ($left['points'] !== $right['points']) {
                return $right['points'] <=> $left['points'];
            }

            if ($left['wins'] !== $right['wins']) {
                return $right['wins'] <=> $left['wins'];
            }

            return $left['losses'] <=> $right['losses'];
        });

        return $rows;
    }

    private function resolveTournament(?int $id, TournamentRepository $tournamentRepository): ?Tournament
    {
        if ($id !== null) {
            return $tournamentRepository->find($id);
        }

        return $tournamentRepository->findOneBy([], [
            'startDate' => 'DESC',
            'createdAt' => 'DESC',
        ]);
    }
}
