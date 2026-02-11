<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductsController extends AbstractController
{
    #[Route('/admin/products', name: 'admin_products', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/products.html.twig');
    }
}
