<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentDetailController extends AbstractController
{
    #[Route('/admin/tournament-detail', name: 'admin_tournament_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournament-detail.html.twig');
    }
}
