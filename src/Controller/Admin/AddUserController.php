<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AddUserController extends AbstractController
{
    #[Route('/admin/add-user-legacy', name: 'admin_add_user_legacy', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('admin_user_create');
    }
}
