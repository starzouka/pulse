<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductFormController extends AbstractController
{
    #[Route('/admin/product-form', name: 'admin_product_form', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/product-form.html.twig');
    }
}
