<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ResetPasswordController extends AbstractController
{
    #[Route('/pages/reset-password', name: 'front_reset_password', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/reset-password.html.twig');
    }
}
