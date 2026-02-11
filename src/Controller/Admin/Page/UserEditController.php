<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserEditController extends AbstractController
{
    #[Route('/admin/user-edit', name: 'admin_user_edit', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/user-edit.html.twig');
    }
}
