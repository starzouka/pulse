<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentRequestDetailController extends AbstractController
{
    #[Route('/admin/tournament-request-detail', name: 'admin_tournament_request_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournament-request-detail.html.twig');
    }
}
