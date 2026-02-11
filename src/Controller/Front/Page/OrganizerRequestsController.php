<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestsController extends AbstractController
{
    #[Route('/pages/organizer-requests', name: 'front_organizer_requests', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-requests.html.twig');
    }
}
