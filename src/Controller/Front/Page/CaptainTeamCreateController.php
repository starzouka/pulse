<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTeamCreateController extends AbstractController
{
    #[Route('/pages/captain-team-create', name: 'front_captain_team_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-team-create.html.twig');
    }
}
