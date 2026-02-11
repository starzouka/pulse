<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileController extends AbstractController
{
    #[Route('/pages/profile', name: 'front_profile', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/profile.html.twig');
    }
}
