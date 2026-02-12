<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\Team;
use App\Entity\User;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainProductsController extends AbstractController
{
    #[Route('/pages/captain-products', name: 'front_captain_products', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $requestedTeamId = $this->toPositiveInt($request->query->get('team'));
        $context = $captainTeamContextProvider->resolve($viewer, $requestedTeamId);
        $captainTeams = $context['teams'];
        $activeTeam = $context['active_team'];

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $searchQuery = trim((string) $request->query->get('q', ''));
        $includeInactive = (string) $request->query->get('inactive', '') === '1';

        $products = $productRepository->findByTeamWithFilters(
            $activeTeam,
            $searchQuery,
            $includeInactive,
            250,
        );

        return $this->render('front/pages/captain-products.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'products' => $products,
            'product_primary_images' => $productImageRepository->findPrimaryImagesByProducts($products),
            'filters' => [
                'q' => $searchQuery,
                'inactive' => $includeInactive,
            ],
        ]);
    }

    #[Route('/pages/captain-products/{id}/delete', name: 'front_captain_product_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_product_delete_' . $id, (string) $request->request->get('_token'))) {
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

        $entityManager->remove($product);
        $entityManager->flush();

        $this->addFlash('success', 'Produit supprime.');

        return $this->redirectToRoute('front_captain_products', ['team' => $teamId]);
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }
}

