<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductDetailController extends AbstractController
{
    #[Route('/admin/product-detail', name: 'admin_product_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/product-detail.html.twig');
    }
}
