<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Tournament;
use App\Entity\User;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchesController extends AbstractController
{
    #[Route('/pages/organizer-matches', name: 'front_organizer_matches', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
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

        $selectedTournament = $this->resolveSelectedTournament($request, $tournaments, $tournamentRepository, $user);
        $matches = [];
        $matchTeamsByMatchId = [];

        if ($selectedTournament instanceof Tournament) {
            $matches = $tournamentMatchRepository->findBy(
                ['tournamentId' => $selectedTournament],
                ['scheduledAt' => 'ASC', 'matchId' => 'DESC'],
            );

            foreach ($matches as $match) {
                $matchId = $match->getMatchId();
                if ($matchId === null) {
                    continue;
                }

                $matchTeamsByMatchId[$matchId] = $matchTeamRepository->findBy(
                    ['matchId' => $match],
                    ['score' => 'DESC'],
                );
            }
        }

        return $this->render('front/pages/organizer-matches.html.twig', [
            'tournaments' => $tournaments,
            'selectedTournament' => $selectedTournament,
            'matches' => $matches,
            'matchTeamsByMatchId' => $matchTeamsByMatchId,
        ]);
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
        $queryTournamentId = $request->query->getInt('tournament', 0);
        if ($queryTournamentId > 0) {
            $selectedTournament = $tournamentRepository->findOneBy([
                'tournamentId' => $queryTournamentId,
                'organizerUserId' => $user,
            ]);
            if ($selectedTournament instanceof Tournament) {
                return $selectedTournament;
            }
        }

        return $tournaments[0] ?? null;
    }
}
