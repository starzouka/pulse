<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoryFormController extends AbstractController
{
    #[Route('/admin/category-form', name: 'admin_category_form', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/category-form.html.twig');
    }
}
