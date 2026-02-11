<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchCreateController extends AbstractController
{
    #[Route('/pages/organizer-match-create', name: 'front_organizer_match_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-match-create.html.twig');
    }
}
