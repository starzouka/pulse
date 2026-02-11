<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginController extends AbstractController
{
    #[Route('/pages/login', name: 'front_login', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/login.html.twig');
    }
}
