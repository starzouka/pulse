<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartRepository;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Service\Shop\CartManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductDetailController extends AbstractController
{
    #[Route('/pages/product-detail/{id}', name: 'front_product_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        CartRepository $cartRepository,
        CartManager $cartManager,
    ): Response
    {
        $queryId = $request->query->getInt('id', 0);
        if ($id === null && $queryId > 0) {
            $id = $queryId;
        }

        $product = null;
        if ($id !== null) {
            $product = $productRepository->findOneBy([
                'productId' => $id,
                'isActive' => true,
            ]);
        }

        if (!$product instanceof Product) {
            $product = $productRepository->findOneBy(
                ['isActive' => true],
                ['createdAt' => 'DESC'],
            );
        }

        if (!$product instanceof Product) {
            throw $this->createNotFoundException('Aucun produit actif disponible.');
        }

        $viewer = $this->getUser();
        $cartQuantityForProduct = 0;
        if ($viewer instanceof User) {
            $cart = $cartRepository->findOneByUser($viewer);
            if ($cart !== null) {
                foreach ($cartManager->buildSummary($cart)['items'] as $item) {
                    $itemProduct = $item['product'] ?? null;
                    if ($itemProduct instanceof Product && $itemProduct->getProductId() === $product->getProductId()) {
                        $cartQuantityForProduct = (int) ($item['quantity'] ?? 0);
                        break;
                    }
                }
            }
        }

        $relatedProducts = $productRepository->findRelatedActiveByProduct($product, 8);
        $relatedPrimaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($relatedProducts);

        return $this->render('front/pages/product-detail.html.twig', [
            'product' => $product,
            'product_images' => $productImageRepository->findImagesByProduct($product),
            'related_products' => $relatedProducts,
            'related_primary_images_by_product_id' => $relatedPrimaryImagesByProductId,
            'cart_quantity_for_product' => $cartQuantityForProduct,
            'login_target_path' => $request->getUri(),
        ]);
    }
}
