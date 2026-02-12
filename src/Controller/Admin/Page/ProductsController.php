<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\Product;
use App\Entity\ProductImage;
use App\Entity\Image;
use App\Form\ProductImageType;
use Symfony\Component\HttpFoundation\Request;

final class ProductsController extends AbstractController
{
    #[Route('/admin/product/', name: 'admin_product_redirect', methods: ['GET'])]
    public function redirectToProducts(): RedirectResponse
    {
        return $this->redirectToRoute('admin_products');
    }
    #[Route('/admin/products', name: 'admin_products', methods: ['GET'])]
    public function index(ProductRepository $productRepository, Request $request): Response
    {
        $qb = $productRepository->createQueryBuilder('p');

        // Recherche par nom ou SKU
        $search = $request->query->get('search');
        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.productId LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Recherche par équipe
        $team = $request->query->get('team');
        if ($team) {
            $qb->leftJoin('p.teamId', 't')
                ->andWhere('t.name LIKE :team')
                ->setParameter('team', '%' . $team . '%');
        }

        // Filtre actif
        $isActive = $request->query->get('is_active');
        if ($isActive === 'true') {
            $qb->andWhere('p.isActive = true');
        } elseif ($isActive === 'false') {
            $qb->andWhere('p.isActive = false');
        }

        $products = $qb->getQuery()->getResult();
        return $this->render('admin/pages/products.html.twig', [
            'products' => $products,
            'search' => $search,
            'team' => $team,
            'is_active' => $isActive,
        ]);
    }


    #[Route('/admin/products/{id}/add-image', name: 'admin_product_add_image', methods: ['GET', 'POST'])]
    public function addImage(int $id, ProductRepository $productRepository, EntityManagerInterface $em, Request $request): Response
    {
        $product = $productRepository->find($id);
        if (!$product) {
            $this->addFlash('danger', 'Produit introuvable.');
            return $this->redirectToRoute('admin_products');
        }
        $productImage = new ProductImage();
        $productImage->setProduct($product);
        $form = $this->createForm(ProductImageType::class, $productImage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload de fichier
            $imageFile = $form['imageFile']->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // Remplacement transliterator_transliterate par une alternative PHP
                $safeFilename = preg_replace('/[^A-Za-z0-9_]/', '', strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $originalFilename)));
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                $fileSize = $imageFile->getSize();
                $mimeType = $imageFile->getClientMimeType();
                $imageFile->move(
                    $this->getParameter('kernel.project_dir').'/public/uploads/images',
                    $newFilename
                );
                // Créer une entité Image
                $image = new Image();
                $image->setFileUrl('/uploads/images/'.$newFilename);
                $image->setMimeType($mimeType);
                $image->setSizeBytes($fileSize);
                $image->setCreatedAt(new \DateTime());
                $em->persist($image);
                $productImage->setImage($image);
            }
            $em->persist($productImage);
            $em->flush();
            $this->addFlash('success', 'Image ajoutée au produit.');
            return $this->redirectToRoute('admin_products');
        }
        return $this->render('admin/pages/product-image-form.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
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
