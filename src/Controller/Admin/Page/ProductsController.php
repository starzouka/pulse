<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

final class ProductsController extends AbstractController
{
    #[Route('/admin/products', name: 'admin_products', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('admin/pages/products.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/admin/products/delete/{id}', name: 'admin_product_delete', methods: ['POST'])]
    public function delete(int $id, ProductRepository $productRepository, EntityManagerInterface $em): RedirectResponse
    {
        $product = $productRepository->find($id);
        if ($product) {
            $em->remove($product);
            $em->flush();
            $this->addFlash('success', 'Produit supprimé avec succès.');
        } else {
            $this->addFlash('danger', 'Produit introuvable.');
        }
        return $this->redirectToRoute('admin_products');
    }
}
