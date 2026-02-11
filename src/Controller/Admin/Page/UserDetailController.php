<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserDetailController extends AbstractController
{
    #[Route('/admin/user-detail', name: 'admin_user_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/user-detail.html.twig');
    }
}
