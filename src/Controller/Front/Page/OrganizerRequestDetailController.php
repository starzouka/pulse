<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestDetailController extends AbstractController
{
    #[Route('/pages/organizer-request-detail', name: 'front_organizer_request_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-request-detail.html.twig');
    }
}
