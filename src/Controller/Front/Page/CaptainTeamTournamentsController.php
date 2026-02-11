<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTeamTournamentsController extends AbstractController
{
    #[Route('/pages/captain-team-tournaments', name: 'front_captain_team_tournaments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-team-tournaments.html.twig');
    }
}
