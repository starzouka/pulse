<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\CartRepository;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Repository\TeamRepository;
use App\Service\Shop\CartManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ShopController extends AbstractController
{
    #[Route('/pages/shop', name: 'front_shop', methods: ['GET'])]
    public function index(
        Request $request,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        TeamRepository $teamRepository,
        CartRepository $cartRepository,
        CartManager $cartManager,
    ): Response
    {
        $query = trim((string) $request->query->get('q', ''));
        $teamFilterRaw = $request->query->get('team');
        $teamFilter = is_scalar($teamFilterRaw) && (int) $teamFilterRaw > 0 ? (int) $teamFilterRaw : null;

        $minPriceRaw = trim((string) $request->query->get('min', ''));
        $maxPriceRaw = trim((string) $request->query->get('max', ''));
        $minPrice = $minPriceRaw !== '' ? (float) $minPriceRaw : null;
        $maxPrice = $maxPriceRaw !== '' ? (float) $maxPriceRaw : null;

        $inStockOnly = (string) $request->query->get('stock', '') === '1';
        $activeOnly = (string) $request->query->get('active', '1') !== '0';

        $products = $productRepository->searchForShop(
            query: $query,
            teamId: $teamFilter,
            minPrice: $minPrice,
            maxPrice: $maxPrice,
            inStockOnly: $inStockOnly,
            activeOnly: $activeOnly,
            limit: 120,
        );
        $primaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($products);

        $viewer = $this->getUser();
        $cartItemsCount = 0;
        if ($viewer instanceof User) {
            $cart = $cartRepository->findOneByUser($viewer);
            if ($cart !== null) {
                $cartItemsCount = $cartManager->buildSummary($cart)['total_quantity'] ?? 0;
            }
        }

        return $this->render('front/pages/shop.html.twig', [
            'products' => $products,
            'product_primary_images' => $primaryImagesByProductId,
            'teams' => $teamRepository->findBy([], ['name' => 'ASC'], 200),
            'filters' => [
                'q' => $query,
                'team' => $teamFilter,
                'min' => $minPriceRaw,
                'max' => $maxPriceRaw,
                'stock' => $inStockOnly,
                'active' => $activeOnly,
            ],
            'cart_items_count' => $cartItemsCount,
        ]);
    }
}
