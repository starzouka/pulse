<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyRequestsController extends AbstractController
{
    #[Route('/pages/my-requests', name: 'front_my_requests', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/my-requests.html.twig');
    }
}
