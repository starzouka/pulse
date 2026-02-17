<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginController extends AbstractController
{
    #[Route('/security/login', name: 'security_login', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('front_login');
    }
}
