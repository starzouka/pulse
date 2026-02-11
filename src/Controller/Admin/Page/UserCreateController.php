<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserCreateController extends AbstractController
{
    #[Route('/admin/user-create', name: 'admin_user_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/user-create.html.twig');
    }
}
