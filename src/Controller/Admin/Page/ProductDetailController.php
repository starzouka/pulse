<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\ProductRepository;

final class ProductDetailController extends AbstractController
{
    #[Route('/admin/product/{id}', name: 'admin_product_detail', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function detail(int $id, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);
        if (!$product) {
            $this->addFlash('danger', 'Produit introuvable.');
            return $this->redirectToRoute('admin_products');
        }
        return $this->render('admin/pages/product-detail.html.twig', [
            'product' => $product,
        ]);
    }
}
