<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlayersController extends AbstractController
{
    #[Route('/pages/players', name: 'front_players', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/players.html.twig');
    }
}
