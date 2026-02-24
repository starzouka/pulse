<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostDetailController extends AbstractController
{
    #[Route('/pages/post-detail', name: 'front_post_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/post-detail.html.twig');
    }
}
