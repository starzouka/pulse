<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchesController extends AbstractController
{
    #[Route('/pages/organizer-matches', name: 'front_organizer_matches', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-matches.html.twig');
    }
}
