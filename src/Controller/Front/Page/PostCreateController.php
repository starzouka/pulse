<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostCreateController extends AbstractController
{
    #[Route('/pages/post-create', name: 'front_post_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/post-create.html.twig');
    }
}
