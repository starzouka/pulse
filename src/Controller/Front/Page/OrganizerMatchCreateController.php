<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\MatchTeam;
use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use App\Entity\User;
use App\Form\TournamentMatchType;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchCreateController extends AbstractController
{
    #[Route('/pages/organizer-match-create', name: 'front_organizer_match_create', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournaments = $tournamentRepository->findBy(
            ['organizerUserId' => $user],
            ['startDate' => 'DESC'],
        );

        if ($tournaments === []) {
            $this->addFlash('error', 'Aucun tournoi disponible. Creez d abord un tournoi.');

            return $this->redirectToRoute('front_organizer_tournaments');
        }

        $selectedTournament = $this->resolveSelectedTournament($request, $tournaments, $tournamentRepository, $user);
        $teamChoices = $selectedTournament instanceof Tournament
            ? $this->getAcceptedTeamsForTournament($selectedTournament, $tournamentTeamRepository)
            : [];

        $tournamentMatch = new TournamentMatch();
        $tournamentMatch->setStatus('SCHEDULED');
        if ($selectedTournament instanceof Tournament) {
            $tournamentMatch->setTournamentId($selectedTournament);
        }

        $form = $this->createForm(TournamentMatchType::class, $tournamentMatch, [
            'tournament_choices' => $tournaments,
            'team_choices' => $teamChoices,
            'tournament_locked' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participantTeams = [];
            foreach ($form->get('participantTeams')->getData() as $team) {
                if ($team instanceof Team) {
                    $participantTeams[] = $team;
                }
            }

            if (count($participantTeams) < 2) {
                $form->get('participantTeams')->addError(new FormError('Un match doit avoir au moins deux equipes.'));
            }

            $allowedTeamIds = [];
            foreach ($teamChoices as $teamChoice) {
                $teamId = $teamChoice->getTeamId();
                if ($teamId !== null) {
                    $allowedTeamIds[$teamId] = true;
                }
            }

            foreach ($participantTeams as $participantTeam) {
                $teamId = $participantTeam->getTeamId();
                if ($teamId === null || !isset($allowedTeamIds[$teamId])) {
                    $form->get('participantTeams')->addError(new FormError('Selection d equipes invalide pour ce tournoi.'));
                    break;
                }
            }

            if (count($form->get('participantTeams')->getErrors(true)) === 0) {
                $now = new \DateTime();
                $tournamentMatch
                    ->setCreatedAt($now)
                    ->setUpdatedAt($now)
                    ->setResultSubmittedByUserId(null)
                ;

                $entityManager->persist($tournamentMatch);

                foreach ($participantTeams as $participantTeam) {
                    $matchTeam = new MatchTeam();
                    $matchTeam
                        ->setMatchId($tournamentMatch)
                        ->setTeamId($participantTeam)
                    ;
                    $entityManager->persist($matchTeam);
                }

                $entityManager->flush();

                $this->addFlash('success', 'Match cree avec succes.');

                return $this->redirectToRoute('front_organizer_match_edit', [
                    'id' => $tournamentMatch->getMatchId(),
                ]);
            }
        }

        return $this->render('front/pages/organizer-match-create.html.twig', [
            'matchForm' => $form->createView(),
            'selectedTournament' => $selectedTournament,
        ]);
    }

    /**
     * @param list<Tournament> $tournaments
     *
     * @return list<Team>
     */
    private function getAcceptedTeamsForTournament(Tournament $tournament, TournamentTeamRepository $tournamentTeamRepository): array
    {
        $registrations = $tournamentTeamRepository->findBy([
            'tournamentId' => $tournament,
            'status' => 'ACCEPTED',
        ]);

        $teams = [];
        foreach ($registrations as $registration) {
            $team = $registration->getTeamId();
            $teamId = $team?->getTeamId();
            if ($team instanceof Team && $teamId !== null) {
                $teams[$teamId] = $team;
            }
        }

        return array_values($teams);
    }

    /**
     * @param list<Tournament> $tournaments
     */
    private function resolveSelectedTournament(
        Request $request,
        array $tournaments,
        TournamentRepository $tournamentRepository,
        User $user,
    ): ?Tournament
    {
        $submitted = $request->request->all('tournament_match');
        $submittedTournamentId = is_array($submitted) ? (int) ($submitted['tournamentId'] ?? 0) : 0;
        $queryTournamentId = $request->query->getInt('tournament', 0);
        $selectedTournamentId = $submittedTournamentId > 0 ? $submittedTournamentId : $queryTournamentId;

        if ($selectedTournamentId > 0) {
            $selectedTournament = $tournamentRepository->findOneBy([
                'tournamentId' => $selectedTournamentId,
                'organizerUserId' => $user,
            ]);
            if ($selectedTournament instanceof Tournament) {
                return $selectedTournament;
            }
        }

        return $tournaments[0] ?? null;
    }
}
