<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommentsController extends AbstractController
{
    #[Route('/admin/comments', name: 'admin_comments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/comments.html.twig');
    }
}
