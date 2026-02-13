<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentTeamsController extends AbstractController
{
    #[Route('/admin/tournament-teams', name: 'admin_tournament_teams', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournament-teams.html.twig');
    }
}
