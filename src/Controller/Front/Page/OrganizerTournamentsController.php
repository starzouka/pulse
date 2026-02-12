<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentsController extends AbstractController
{
    #[Route('/pages/organizer-tournaments', name: 'front_organizer_tournaments', methods: ['GET'])]
    public function index(
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
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

        $registrationsByTournamentId = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if ($tournamentId === null) {
                continue;
            }

            $registrationsByTournamentId[$tournamentId] = $tournamentTeamRepository->count([
                'tournamentId' => $tournament,
            ]);
        }

        return $this->render('front/pages/organizer-tournaments.html.twig', [
            'tournaments' => $tournaments,
            'registrationsByTournamentId' => $registrationsByTournamentId,
        ]);
    }
}
