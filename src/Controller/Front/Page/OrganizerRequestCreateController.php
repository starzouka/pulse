<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestCreateController extends AbstractController
{
    #[Route('/pages/organizer-request-create', name: 'front_organizer_request_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-request-create.html.twig');
    }
}
