<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\ProductRating;
use App\Entity\User;
use App\Repository\ProductRatingRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductRatingController extends AbstractController
{
    #[Route('/pages/product/{id}/rate', name: 'front_product_rate', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function rate(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        ProductRatingRepository $ratingRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté pour noter un produit.');
            return $this->redirectToRoute('front_login', ['_target_path' => $request->getUri()]);
        }

        $product = $productRepository->find($id);
        if (!$product instanceof Product) {
            $this->addFlash('error', 'Produit non trouvé.');
            return $this->redirectToRoute('front_shop');
        }

        $ratingValue = (int) $request->request->get('rating', 0);
        if ($ratingValue < 1 || $ratingValue > 5) {
            $this->addFlash('error', 'La note doit être entre 1 et 5.');
            return $this->redirectToRoute('front_product_detail', ['id' => $id]);
        }

        // Vérifier si l\'utilisateur a déjà noté ce produit
        $existingRating = $ratingRepository->findUserRatingForProduct($user, $product);

        if ($existingRating instanceof ProductRating) {
            // Mettre à jour la note existante
            $existingRating->setRating($ratingValue);
            $entityManager->flush();
            $this->addFlash('success', 'Votre note a été mise à jour.');
        } else {
            // Créer une nouvelle note
            $rating = new ProductRating();
            $rating->setProduct($product);
            $rating->setUser($user);
            $rating->setRating($ratingValue);
            $rating->setCreatedAt(new \DateTime());

            $entityManager->persist($rating);
            $entityManager->flush();
            $this->addFlash('success', 'Votre note a été enregistrée.');
        }

        // Récupérer les nouvelles statistiques de notation
        $newAverage = $product->getAverageRating();
        $newCount = $product->getRatingCount();

        // Vérifier si la requête est une requête AJAX
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => true,
                'newAverage' => $newAverage,
                'newCount' => $newCount,
                'message' => $existingRating instanceof ProductRating ? 'Votre note a été mise à jour.' : 'Votre note a été enregistrée.'
            ]);
        }

        return $this->redirectToRoute('front_product_detail', ['id' => $id]);
    }
}
