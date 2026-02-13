<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\ProductImage;
use App\Entity\Team;
use App\Entity\User;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Media\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainProductEditController extends AbstractController
{
    #[Route('/pages/captain-product-edit/{id}', name: 'front_captain_product_edit', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET', 'POST'])]
    public function index(
        ?int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        ImageUploader $imageUploader,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $requestedTeamId = $this->toPositiveInt($request->query->get('team') ?? $request->request->get('team_id'));
        $context = $captainTeamContextProvider->resolve($viewer, $requestedTeamId);
        $captainTeams = $context['teams'];
        $activeTeam = $context['active_team'];

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $product = $this->resolveEditableProduct($activeTeam, $id, $productRepository);
        if (!$product instanceof Product) {
            $this->addFlash('error', 'Aucun produit a modifier pour cette equipe.');

            return $this->redirectToRoute('front_captain_products', [
                'team' => $activeTeam->getTeamId(),
            ]);
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('captain_product_edit_' . $product->getProductId(), (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('front_captain_product_edit', [
                    'id' => $product->getProductId(),
                    'team' => $activeTeam->getTeamId(),
                ]);
            }

            $name = trim((string) $request->request->get('name', ''));
            $description = $this->normalizeNullableText($request->request->get('description'));
            $price = $this->normalizeDecimalString($request->request->get('price'));
            $stockQty = max(0, (int) $request->request->get('stock_qty', 0));
            $sku = $this->normalizeNullableText($request->request->get('sku'));
            $isActive = (string) $request->request->get('is_active', '1') === '1';

            if ($name === '') {
                $this->addFlash('error', 'Le nom du produit est obligatoire.');

                return $this->redirectToRoute('front_captain_product_edit', [
                    'id' => $product->getProductId(),
                    'team' => $activeTeam->getTeamId(),
                ]);
            }

            if ($price === null) {
                $this->addFlash('error', 'Le prix du produit est invalide.');

                return $this->redirectToRoute('front_captain_product_edit', [
                    'id' => $product->getProductId(),
                    'team' => $activeTeam->getTeamId(),
                ]);
            }

            $product
                ->setName($name)
                ->setDescription($description)
                ->setPrice($price)
                ->setStockQty($stockQty)
                ->setSku($sku)
                ->setIsActive($isActive)
                ->setUpdatedAt(new \DateTime());

            $existingImagesCount = count($productImageRepository->findImagesByProduct($product));
            $rawFiles = (array) $request->files->all('images');
            $uploadedFiles = $imageUploader->normalizeUploads($rawFiles);
            $position = $existingImagesCount + 1;

            foreach ($uploadedFiles as $uploadedFile) {
                if (!$imageUploader->isValidImageUpload($uploadedFile)) {
                    continue;
                }

                $image = $imageUploader->uploadImage(
                    $uploadedFile,
                    $viewer,
                    'products',
                    'product_image',
                    'Produit ' . $name,
                );
                $entityManager->persist($image);
                $entityManager->persist(
                    (new ProductImage())
                        ->setProductId($product)
                        ->setImageId($image)
                        ->setPosition($position),
                );
                ++$position;
            }

            $entityManager->flush();

            $this->addFlash('success', 'Produit mis a jour.');

            return $this->redirectToRoute('front_captain_product_edit', [
                'id' => $product->getProductId(),
                'team' => $activeTeam->getTeamId(),
            ]);
        }

        return $this->render('front/pages/captain-product-edit.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'product' => $product,
            'product_images' => $productImageRepository->findImagesByProduct($product),
        ]);
    }

    #[Route('/pages/captain-product-edit/{id}/images/{imageId}/remove', name: 'front_captain_product_image_remove', requirements: ['id' => '\d+', 'imageId' => '\d+'], methods: ['POST'])]
    public function removeImage(
        int $id,
        int $imageId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_product_remove_image_' . $id . '_' . $imageId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_products');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $product = $productRepository->findOneByTeamAndId($team, $id);
        if (!$product instanceof Product) {
            $this->addFlash('error', 'Produit introuvable.');

            return $this->redirectToRoute('front_captain_products', ['team' => $teamId]);
        }

        $productImage = $productImageRepository->findOneBy([
            'productId' => $product,
            'imageId' => $imageId,
        ]);
        if ($productImage instanceof ProductImage) {
            $entityManager->remove($productImage);
            $entityManager->flush();
            $this->addFlash('success', 'Image retiree du produit.');
        } else {
            $this->addFlash('error', 'Image introuvable.');
        }

        return $this->redirectToRoute('front_captain_product_edit', [
            'id' => $id,
            'team' => $teamId,
        ]);
    }

    private function resolveEditableProduct(Team $team, ?int $id, ProductRepository $productRepository): ?Product
    {
        if ($id !== null && $id > 0) {
            return $productRepository->findOneByTeamAndId($team, $id);
        }

        $products = $productRepository->findByTeamWithFilters($team, '', true, 1);

        return $products[0] ?? null;
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }

    private function normalizeNullableText(mixed $rawValue): ?string
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = trim((string) $rawValue);

        return $value !== '' ? $value : null;
    }

    private function normalizeDecimalString(mixed $rawValue): ?string
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = trim((string) $rawValue);
        if ($value === '' || !is_numeric($value)) {
            return null;
        }

        $floatValue = (float) $value;
        if ($floatValue < 0) {
            return null;
        }

        return number_format($floatValue, 2, '.', '');
    }
}

