<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UsersController extends AbstractController
{
    #[Route('/admin/users', name: 'admin_users', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/users.html.twig');
    }
}
