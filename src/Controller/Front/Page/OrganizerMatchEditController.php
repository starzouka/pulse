<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\MatchTeam;
use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use App\Entity\User;
use App\Form\TournamentMatchType;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchEditController extends AbstractController
{
    #[Route('/pages/organizer-match-edit/{id}', name: 'front_organizer_match_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function index(
        int $id,
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournamentMatch = $tournamentMatchRepository->find($id);
        if (!$tournamentMatch instanceof TournamentMatch) {
            throw $this->createNotFoundException('Match introuvable.');
        }

        $tournament = $tournamentMatch->getTournamentId();
        if (
            !$tournament instanceof Tournament
            || $tournament->getOrganizerUserId()?->getUserId() !== $user->getUserId()
        ) {
            throw $this->createNotFoundException('Match introuvable.');
        }

        $existingMatchTeams = $matchTeamRepository->findBy(['matchId' => $tournamentMatch]);
        $existingEntriesByTeamId = [];
        $existingTeams = [];

        foreach ($existingMatchTeams as $existingMatchTeam) {
            $team = $existingMatchTeam->getTeamId();
            $teamId = $team?->getTeamId();
            if ($team instanceof Team && $teamId !== null) {
                $existingEntriesByTeamId[$teamId] = $existingMatchTeam;
                $existingTeams[$teamId] = $team;
            }
        }

        $teamChoices = $this->getAcceptedTeamsForTournament($tournament, $tournamentTeamRepository);
        foreach ($existingTeams as $teamId => $existingTeam) {
            $teamChoices[$teamId] = $existingTeam;
        }
        $teamChoices = array_values($teamChoices);

        $form = $this->createForm(TournamentMatchType::class, $tournamentMatch, [
            'tournament_choices' => [$tournament],
            'team_choices' => $teamChoices,
            'tournament_locked' => true,
        ]);
        $form->get('participantTeams')->setData(array_values($existingTeams));
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

            if (count($form->get('participantTeams')->getErrors(true)) === 0) {
                $teamScores = $request->request->all('team_scores');
                if (!is_array($teamScores)) {
                    $teamScores = [];
                }
                $winnerTeamIds = $request->request->all('team_winners');
                if (!is_array($winnerTeamIds)) {
                    $winnerTeamIds = [];
                }
                $winnerTeamIds = array_map('strval', $winnerTeamIds);

                $selectedTeamsById = [];
                foreach ($participantTeams as $participantTeam) {
                    $teamId = $participantTeam->getTeamId();
                    if ($teamId !== null) {
                        $selectedTeamsById[$teamId] = $participantTeam;
                    }
                }

                foreach ($existingEntriesByTeamId as $teamId => $existingEntry) {
                    if (!isset($selectedTeamsById[$teamId])) {
                        $entityManager->remove($existingEntry);
                    }
                }

                foreach ($selectedTeamsById as $teamId => $selectedTeam) {
                    $entry = $existingEntriesByTeamId[$teamId] ?? null;
                    if (!$entry instanceof MatchTeam) {
                        $entry = new MatchTeam();
                        $entry
                            ->setMatchId($tournamentMatch)
                            ->setTeamId($selectedTeam)
                        ;
                        $entityManager->persist($entry);
                    }

                    $rawScore = $teamScores[(string) $teamId] ?? null;
                    $score = null;
                    if ($rawScore !== null && $rawScore !== '') {
                        $score = max(0, (int) $rawScore);
                    }

                    $entry
                        ->setScore($score)
                        ->setIsWinner(in_array((string) $teamId, $winnerTeamIds, true))
                    ;
                }

                $tournamentMatch
                    ->setUpdatedAt(new \DateTime())
                    ->setResultSubmittedByUserId(
                        $tournamentMatch->getStatus() === 'FINISHED' ? $user : null,
                    )
                ;

                $entityManager->flush();

                $this->addFlash('success', 'Match mis a jour avec succes.');

                return $this->redirectToRoute('front_organizer_match_edit', ['id' => $id]);
            }
        }

        $participantRows = $this->buildParticipantRows(
            $request,
            $form,
            $existingEntriesByTeamId,
        );

        return $this->render('front/pages/organizer-match-edit.html.twig', [
            'matchForm' => $form->createView(),
            'tournamentMatch' => $tournamentMatch,
            'participantRows' => $participantRows,
        ]);
    }

    /**
     * @return array<int, Team>
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

        return $teams;
    }

    /**
     * @param array<int, MatchTeam> $existingEntriesByTeamId
     *
     * @return list<array{team: Team, score: ?int, isWinner: bool}>
     */
    private function buildParticipantRows(
        Request $request,
        \Symfony\Component\Form\FormInterface $form,
        array $existingEntriesByTeamId,
    ): array
    {
        $requestedScores = $request->request->all('team_scores');
        if (!is_array($requestedScores)) {
            $requestedScores = [];
        }

        $requestedWinners = $request->request->all('team_winners');
        if (!is_array($requestedWinners)) {
            $requestedWinners = [];
        }
        $requestedWinnerIds = array_map('strval', $requestedWinners);

        $rows = [];
        foreach ($form->get('participantTeams')->getData() as $team) {
            if (!$team instanceof Team || $team->getTeamId() === null) {
                continue;
            }

            $teamId = $team->getTeamId();
            $existingEntry = $existingEntriesByTeamId[$teamId] ?? null;

            $score = $existingEntry?->getScore();
            if (array_key_exists((string) $teamId, $requestedScores)) {
                $rawScore = $requestedScores[(string) $teamId];
                $score = ($rawScore === '' || $rawScore === null) ? null : max(0, (int) $rawScore);
            }

            $isWinner = $existingEntry?->isWinner() ?? false;
            if ($request->isMethod('POST')) {
                $isWinner = in_array((string) $teamId, $requestedWinnerIds, true);
            }

            $rows[] = [
                'team' => $team,
                'score' => $score,
                'isWinner' => $isWinner,
            ];
        }

        return $rows;
    }
}
