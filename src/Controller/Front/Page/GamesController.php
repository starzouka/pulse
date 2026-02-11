<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    #[Route('/pages/games', name: 'front_games', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/games.html.twig');
    }
}
