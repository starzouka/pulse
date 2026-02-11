<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentRequestsController extends AbstractController
{
    #[Route('/admin/tournament-requests', name: 'admin_tournament_requests', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournament-requests.html.twig');
    }
}
