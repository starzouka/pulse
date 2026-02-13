<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AboutController extends AbstractController
{
    #[Route('/pages/about', name: 'front_about', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/about.html.twig');
    }
}
