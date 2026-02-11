<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostDetailController extends AbstractController
{
    #[Route('/admin/post-detail', name: 'admin_post_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/post-detail.html.twig');
    }
}
