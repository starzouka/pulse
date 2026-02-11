<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentDetailController extends AbstractController
{
    #[Route('/pages/tournament-detail', name: 'front_tournament_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/tournament-detail.html.twig');
    }
}
