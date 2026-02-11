<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoriesController extends AbstractController
{
    #[Route('/admin/categories', name: 'admin_categories', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/categories.html.twig');
    }
}
