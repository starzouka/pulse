<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentTeam;
use App\Entity\User;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTournamentsController extends AbstractController
{
    #[Route('/pages/captain-tournaments', name: 'front_captain_tournaments', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $requestedTeamId = $this->toPositiveInt($request->query->get('team'));
        $context = $captainTeamContextProvider->resolve($viewer, $requestedTeamId);
        $captainTeams = $context['teams'];
        $activeTeam = $context['active_team'];

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $teamParticipations = $tournamentTeamRepository->findByTeamWithTournament($activeTeam, 200);
        $openTournaments = $tournamentRepository->searchCatalog(
            query: null,
            gameId: null,
            categoryId: null,
            status: 'OPEN',
            format: null,
            registrationMode: null,
            dateFrom: null,
            dateTo: null,
            prizeMin: null,
            prizeMax: null,
            sort: 'latest',
            limit: 200,
        );

        $participationByTournamentId = [];
        $participationTournamentIds = [];
        foreach ($teamParticipations as $teamParticipation) {
            $tournamentId = $teamParticipation->getTournamentId()?->getTournamentId();
            if ($tournamentId === null) {
                continue;
            }

            $participationByTournamentId[$tournamentId] = $teamParticipation;
            $participationTournamentIds[] = $tournamentId;
        }

        $openTournamentIds = [];
        foreach ($openTournaments as $openTournament) {
            $tournamentId = $openTournament->getTournamentId();
            if ($tournamentId !== null) {
                $openTournamentIds[] = $tournamentId;
            }
        }

        $registeredCounts = $tournamentTeamRepository->countByTournamentIds($openTournamentIds, ['PENDING', 'ACCEPTED']);
        $acceptedCounts = $tournamentTeamRepository->countByTournamentIds($openTournamentIds, ['ACCEPTED']);
        $totalMatchesByTournamentId = $tournamentMatchRepository->countByTournamentIds(array_values(array_unique(array_merge(
            $openTournamentIds,
            $participationTournamentIds,
        ))));
        $finishedMatchesByTournamentId = $tournamentMatchRepository->countFinishedByTournamentIds(array_values(array_unique(array_merge(
            $openTournamentIds,
            $participationTournamentIds,
        ))));

        $openTournamentsData = [];
        foreach ($openTournaments as $openTournament) {
            $tournamentId = (int) ($openTournament->getTournamentId() ?? 0);
            $participation = $participationByTournamentId[$tournamentId] ?? null;
            $acceptedCount = (int) ($acceptedCounts[$tournamentId] ?? 0);

            $openTournamentsData[] = [
                'tournament' => $openTournament,
                'participation' => $participation,
                'registered_count' => (int) ($registeredCounts[$tournamentId] ?? 0),
                'accepted_count' => $acceptedCount,
                'registration_open' => $this->isRegistrationOpen($openTournament, $acceptedCount),
                'matches_total' => (int) ($totalMatchesByTournamentId[$tournamentId] ?? 0),
                'matches_finished' => (int) ($finishedMatchesByTournamentId[$tournamentId] ?? 0),
            ];
        }

        return $this->render('front/pages/captain-tournaments.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'team_participations' => $teamParticipations,
            'open_tournaments_data' => $openTournamentsData,
            'matches_total_by_tournament_id' => $totalMatchesByTournamentId,
            'matches_finished_by_tournament_id' => $finishedMatchesByTournamentId,
        ]);
    }

    #[Route('/pages/captain-tournaments/register', name: 'front_captain_tournaments_register', methods: ['POST'])]
    public function register(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_tournament_register', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_tournaments');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $tournamentId = (int) $request->request->get('tournament_id', 0);

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $tournament = $tournamentRepository->find($tournamentId);
        if (!$tournament instanceof Tournament) {
            $this->addFlash('error', 'Tournoi introuvable.');

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $existingParticipation = $tournamentTeamRepository->findOneByTournamentAndTeam($tournament, $team);
        if ($existingParticipation instanceof TournamentTeam && in_array(strtoupper((string) $existingParticipation->getStatus()), ['PENDING', 'ACCEPTED'], true)) {
            $this->addFlash('info', 'Cette equipe est deja inscrite (ou en attente).');

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $acceptedCount = $tournamentTeamRepository->countByTournament($tournament, ['ACCEPTED']);
        if (!$this->isRegistrationOpen($tournament, $acceptedCount)) {
            $this->addFlash('error', 'Les inscriptions sont fermees pour ce tournoi.');

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
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
            $entityManager->persist(
                (new TournamentTeam())
                    ->setTournamentId($tournament)
                    ->setTeamId($team)
                    ->setStatus($targetStatus)
                    ->setSeed(null)
                    ->setRegisteredAt(new \DateTime())
                    ->setDecidedAt(null)
                    ->setDecidedByUserId(null)
                    ->setCheckedIn(false)
                    ->setCheckinAt(null),
            );
        }

        $entityManager->flush();

        $this->addFlash(
            'success',
            $targetStatus === 'ACCEPTED'
                ? 'Equipe inscrite avec succes.'
                : 'Demande de participation envoyee.',
        );

        return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
    }

    #[Route('/pages/captain-tournaments/{id}/cancel', name: 'front_captain_tournaments_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function cancel(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_tournament_cancel_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_tournaments');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $tournament = $tournamentRepository->find($id);
        if (!$tournament instanceof Tournament) {
            $this->addFlash('error', 'Tournoi introuvable.');

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $participation = $tournamentTeamRepository->findOneByTournamentAndTeam($tournament, $team);
        if (!$participation instanceof TournamentTeam) {
            $this->addFlash('error', "L'equipe n'est pas inscrite a ce tournoi.");

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $participation
            ->setStatus('CANCELLED')
            ->setDecidedAt(new \DateTime())
            ->setDecidedByUserId($viewer)
            ->setCheckedIn(false)
            ->setCheckinAt(null);

        $entityManager->flush();

        $this->addFlash('success', 'Inscription annulee.');

        return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
    }

    #[Route('/pages/captain-tournaments/{id}/checkin', name: 'front_captain_tournaments_checkin', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function checkin(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_tournament_checkin_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_tournaments');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $tournament = $tournamentRepository->find($id);
        if (!$tournament instanceof Tournament) {
            $this->addFlash('error', 'Tournoi introuvable.');

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $participation = $tournamentTeamRepository->findOneByTournamentAndTeam($tournament, $team);
        if (!$participation instanceof TournamentTeam || strtoupper((string) $participation->getStatus()) !== 'ACCEPTED') {
            $this->addFlash('error', "Le check-in n'est possible que pour une inscription acceptee.");

            return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
        }

        $participation
            ->setCheckedIn(true)
            ->setCheckinAt(new \DateTime());

        $entityManager->flush();

        $this->addFlash('success', 'Check-in confirme.');

        return $this->redirectToRoute('front_captain_tournaments', ['team' => $teamId]);
    }

    private function isRegistrationOpen(Tournament $tournament, int $acceptedCount): bool
    {
        if (strtoupper((string) $tournament->getStatus()) !== 'OPEN') {
            return false;
        }

        $maxTeams = (int) ($tournament->getMaxTeams() ?? 0);
        if ($maxTeams > 0 && $acceptedCount >= $maxTeams) {
            return false;
        }

        $deadline = $tournament->getRegistrationDeadline();
        if ($deadline instanceof \DateTimeInterface) {
            $today = new \DateTimeImmutable('today');
            if ($deadline < $today) {
                return false;
            }
        }

        return true;
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }
}

