<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameDetailController extends AbstractController
{
    #[Route('/pages/game-detail', name: 'front_game_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/game-detail.html.twig');
    }
}
