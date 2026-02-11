<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyTeamsController extends AbstractController
{
    #[Route('/pages/my-teams', name: 'front_my_teams', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/my-teams.html.twig');
    }
}
