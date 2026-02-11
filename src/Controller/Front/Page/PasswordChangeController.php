<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PasswordChangeController extends AbstractController
{
    #[Route('/pages/password-change', name: 'front_password_change', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/password-change.html.twig');
    }
}
