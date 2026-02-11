<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(name: 'front_')]
final class HomeController extends AbstractController
{
    #[Route('/', name: 'root', methods: ['GET'])]
    #[Route('/home', name: 'home', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/home/index.html.twig');
    }
}
