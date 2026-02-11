<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ForgotPasswordController extends AbstractController
{
    #[Route('/pages/forgot-password', name: 'front_forgot_password', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/forgot-password.html.twig');
    }
}
