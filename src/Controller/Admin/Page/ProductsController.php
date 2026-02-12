<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Image;
use App\Entity\Product;
use App\Entity\ProductImage;
use App\Entity\Team;
use App\Entity\User;
use App\Repository\ImageRepository;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Repository\TeamRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductsController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'name', 'team', 'price', 'stock_qty', 'is_active', 'updated_at', 'created_at'];

    #[Route('/admin/products', name: 'admin_products', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        TeamRepository $teamRepository,
        ImageRepository $imageRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingProduct = $editId > 0 ? $productRepository->findOneWithRelationsById($editId) : null;
        if ($editId > 0 && !$editingProduct instanceof Product) {
            $this->addFlash('error', 'Produit introuvable pour edition.');

            return $this->redirectToRoute('admin_products');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_product_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_products');
            }

            $productId = $request->request->getInt('product_id', 0);
            $product = $productId > 0 ? $productRepository->find($productId) : new Product();
            if (!$product instanceof Product) {
                $this->addFlash('error', 'Produit introuvable.');

                return $this->redirectToRoute('admin_products');
            }

            $teamId = $request->request->getInt('team_id', 0);
            $team = $teamRepository->find($teamId);
            if (!$team instanceof Team) {
                $this->addFlash('error', 'Equipe invalide.');

                return $this->redirectToRoute('admin_products', $productId > 0 ? ['edit' => $productId] : []);
            }

            $name = trim((string) $request->request->get('name', ''));
            $description = trim((string) $request->request->get('description', ''));
            $priceRaw = trim((string) $request->request->get('price', '0'));
            $stockQty = max(0, $request->request->getInt('stock_qty', 0));
            $sku = trim((string) $request->request->get('sku', ''));
            $isActive = $this->parseBooleanFilter((string) $request->request->get('is_active', '1')) ?? true;
            $imageUrl = trim((string) $request->request->get('image_url', ''));

            if ($name === '') {
                $this->addFlash('error', 'Le nom du produit est obligatoire.');

                return $this->redirectToRoute('admin_products', $productId > 0 ? ['edit' => $productId] : []);
            }

            if (!is_numeric($priceRaw) || (float) $priceRaw < 0) {
                $this->addFlash('error', 'Prix invalide.');

                return $this->redirectToRoute('admin_products', $productId > 0 ? ['edit' => $productId] : []);
            }

            $now = new \DateTime();
            $product
                ->setTeamId($team)
                ->setName($name)
                ->setDescription($description !== '' ? $description : null)
                ->setPrice(number_format((float) $priceRaw, 2, '.', ''))
                ->setStockQty($stockQty)
                ->setSku($sku !== '' ? $sku : null)
                ->setIsActive($isActive)
                ->setUpdatedAt($now);

            if ($productId <= 0) {
                $product->setCreatedAt($now);
                $entityManager->persist($product);
            }

            try {
                $entityManager->flush();
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (SKU deja utilise ou liaison invalide).');

                return $this->redirectToRoute('admin_products', $productId > 0 ? ['edit' => $productId] : []);
            }

            $this->syncPrimaryImage($product, $imageUrl, $productImageRepository, $imageRepository, $entityManager);

            try {
                $entityManager->flush();
                $this->addFlash('success', $productId > 0 ? 'Produit mis a jour.' : 'Produit cree.');

                return $this->redirectToRoute('admin_products');
            } catch (\Throwable) {
                $this->addFlash('error', 'Produit enregistre, mais image invalide/non unique.');

                return $this->redirectToRoute('admin_products', ['edit' => (int) ($product->getProductId() ?? 0)]);
            }
        }

        $teamFilter = $request->query->getInt('team_id', 0);
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'team_id' => $teamFilter > 0 ? $teamFilter : '',
            'is_active' => trim((string) $request->query->get('is_active', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $products = $productRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['team_id']) ? $filters['team_id'] : null,
            $this->parseBooleanFilter($filters['is_active']),
            $filters['sort'],
            $filters['direction'],
            500
        );

        $primaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($products);
        $editingPrimaryImageUrl = null;
        if ($editingProduct instanceof Product) {
            $editingImages = $productImageRepository->findImagesByProduct($editingProduct);
            if ($editingImages !== []) {
                $editingPrimaryImageUrl = $editingImages[0]->getFileUrl();
            }
        }

        return $this->render('admin/pages/products.html.twig', [
            'products' => $products,
            'editingProduct' => $editingProduct,
            'teams' => $teamRepository->findBy([], ['name' => 'ASC'], 500),
            'primaryImagesByProductId' => $primaryImagesByProductId,
            'editingPrimaryImageUrl' => $editingPrimaryImageUrl,
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/products/{id}/delete', name: 'admin_product_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_product_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_products');
        }

        $product = $productRepository->find($id);
        if (!$product instanceof Product) {
            $this->addFlash('error', 'Produit introuvable.');

            return $this->redirectToRoute('admin_products');
        }

        try {
            $entityManager->remove($product);
            $entityManager->flush();
            $this->addFlash('success', 'Produit supprime.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (produit lie a des paniers/commandes).');
        }

        return $this->redirectToRoute('admin_products');
    }

    #[Route('/admin/products/export/{format}', name: 'admin_products_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        TableExportService $tableExportService
    ): Response {
        $teamId = $request->query->getInt('team_id', 0);
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'team_id' => $teamId > 0 ? $teamId : '',
            'is_active' => trim((string) $request->query->get('is_active', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $products = $productRepository->searchForAdmin(
            $filters['q'],
            is_int($filters['team_id']) ? $filters['team_id'] : null,
            $this->parseBooleanFilter($filters['is_active']),
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $primaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($products);

        $headers = ['ID', 'Nom', 'Equipe', 'Prix', 'Stock', 'Actif', 'SKU', 'Image', 'Cree le', 'Maj'];
        $rows = [];
        foreach ($products as $product) {
            $productId = (int) ($product->getProductId() ?? 0);
            $rows[] = [
                $productId,
                (string) ($product->getName() ?? '-'),
                (string) ($product->getTeamId()?->getName() ?? '-'),
                (string) ($product->getPrice() ?? '0.00'),
                (int) ($product->getStockQty() ?? 0),
                $product->isActive() ? 'Oui' : 'Non',
                (string) ($product->getSku() ?? '-'),
                (string) ($primaryImagesByProductId[$productId]?->getFileUrl() ?? '-'),
                $product->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
                $product->getUpdatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Produits', $headers, $rows, sprintf('admin_products_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Produits', $headers, $rows, sprintf('admin_products_%s.pdf', $fileSuffix));
    }

    private function syncPrimaryImage(
        Product $product,
        string $imageUrl,
        ProductImageRepository $productImageRepository,
        ImageRepository $imageRepository,
        EntityManagerInterface $entityManager
    ): void {
        $existingLinks = $productImageRepository->findBy(['productId' => $product]);
        foreach ($existingLinks as $existingLink) {
            if ($existingLink instanceof ProductImage) {
                $entityManager->remove($existingLink);
            }
        }

        if ($imageUrl === '') {
            return;
        }

        $image = $imageRepository->findOneBy(['fileUrl' => $imageUrl]);
        if (!$image instanceof Image) {
            $image = $this->createImageFromUrl($imageUrl);
            $connectedUser = $this->getUser();
            if ($connectedUser instanceof User) {
                $image->setUploadedByUserId($connectedUser);
            }
            $entityManager->persist($image);
        }

        $link = new ProductImage();
        $link
            ->setProductId($product)
            ->setImageId($image)
            ->setPosition(1);
        $entityManager->persist($link);
    }

    private function parseBooleanFilter(string $value): ?bool
    {
        $normalized = strtolower(trim($value));
        if ($normalized === '') {
            return null;
        }

        if (in_array($normalized, ['1', 'true', 'yes', 'oui'], true)) {
            return true;
        }

        if (in_array($normalized, ['0', 'false', 'no', 'non'], true)) {
            return false;
        }

        return null;
    }

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'created_at';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }

    private function createImageFromUrl(string $fileUrl): Image
    {
        $image = new Image();
        $image
            ->setFileUrl($fileUrl)
            ->setMimeType($this->guessImageMimeType($fileUrl))
            ->setSizeBytes('0')
            ->setCreatedAt(new \DateTime());

        return $image;
    }

    private function guessImageMimeType(string $url): string
    {
        $path = (string) parse_url($url, PHP_URL_PATH);
        $extension = strtolower((string) pathinfo($path, PATHINFO_EXTENSION));

        return match ($extension) {
            'png' => 'image/png',
            'webp' => 'image/webp',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            default => 'image/jpeg',
        };
    }
}
