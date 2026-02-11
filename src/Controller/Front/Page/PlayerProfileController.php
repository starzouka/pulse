<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlayerProfileController extends AbstractController
{
    #[Route('/pages/player-profile', name: 'front_player_profile', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/player-profile.html.twig');
    }
}
