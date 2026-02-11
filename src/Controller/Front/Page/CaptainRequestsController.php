<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainRequestsController extends AbstractController
{
    #[Route('/pages/captain-requests', name: 'front_captain_requests', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-requests.html.twig');
    }
}
