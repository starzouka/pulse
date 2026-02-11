<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerMatchEditController extends AbstractController
{
    #[Route('/pages/organizer-match-edit', name: 'front_organizer_match_edit', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-match-edit.html.twig');
    }
}
