<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileEditController extends AbstractController
{
    #[Route('/pages/profile-edit', name: 'front_profile_edit', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/profile-edit.html.twig');
    }
}
