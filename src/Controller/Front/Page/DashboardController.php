<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/pages/dashboard', name: 'front_dashboard', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/dashboard.html.twig');
    }
}
