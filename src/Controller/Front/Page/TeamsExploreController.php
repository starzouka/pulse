<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamsExploreController extends AbstractController
{
    #[Route('/pages/teams-explore', name: 'front_teams_explore', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/teams-explore.html.twig');
    }
}
