<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostsController extends AbstractController
{
    #[Route('/admin/posts', name: 'admin_posts', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/posts.html.twig');
    }
}
