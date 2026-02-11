<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterController extends AbstractController
{
    #[Route('/pages/register', name: 'front_register', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/register.html.twig');
    }
}
