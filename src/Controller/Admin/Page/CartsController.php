<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Cart;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use App\Repository\UserRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CartsController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'user', 'status', 'items', 'created_at', 'updated_at', 'locked_at'];

    #[Route('/admin/carts', name: 'admin_carts', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        CartRepository $cartRepository,
        CartItemRepository $cartItemRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingCart = $editId > 0 ? $cartRepository->findOneWithUserById($editId) : null;
        if ($editId > 0 && !$editingCart instanceof Cart) {
            $this->addFlash('error', 'Panier introuvable pour edition.');

            return $this->redirectToRoute('admin_carts');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_cart_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_carts');
            }

            $cartId = $request->request->getInt('cart_id', 0);
            $cart = $cartId > 0 ? $cartRepository->find($cartId) : new Cart();
            if (!$cart instanceof Cart) {
                $this->addFlash('error', 'Panier introuvable.');

                return $this->redirectToRoute('admin_carts');
            }

            $userId = $request->request->getInt('user_id', 0);
            $user = $userRepository->find($userId);
            if (!$user instanceof User) {
                $this->addFlash('error', 'Utilisateur invalide.');

                return $this->redirectToRoute('admin_carts', $cartId > 0 ? ['edit' => $cartId] : []);
            }

            $status = strtoupper(trim((string) $request->request->get('status', 'OPEN')));
            if (!in_array($status, ['OPEN', 'LOCKED', 'ORDERED'], true)) {
                $status = 'OPEN';
            }

            $lockedAtRaw = trim((string) $request->request->get('locked_at', ''));
            $lockedAt = $this->parseDateTime($lockedAtRaw);

            $now = new \DateTime();
            $cart
                ->setUserId($user)
                ->setStatus($status)
                ->setLockedAt($lockedAt)
                ->setUpdatedAt($now);

            if ($cartId <= 0) {
                $cart->setCreatedAt($now);
                $entityManager->persist($cart);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', $cartId > 0 ? 'Panier mis a jour.' : 'Panier cree.');

                return $this->redirectToRoute('admin_carts');
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (utilisateur deja associe ou liaison invalide).');

                return $this->redirectToRoute('admin_carts', $cartId > 0 ? ['edit' => $cartId] : []);
            }
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'updated_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $carts = $cartRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        $cartIds = [];
        foreach ($carts as $cart) {
            $cartEntityId = $cart->getCartId();
            if (is_int($cartEntityId) && $cartEntityId > 0) {
                $cartIds[] = $cartEntityId;
            }
        }
        $itemsByCartId = $cartItemRepository->countByCartIds($cartIds);

        return $this->render('admin/pages/carts.html.twig', [
            'carts' => $carts,
            'editingCart' => $editingCart,
            'itemsByCartId' => $itemsByCartId,
            'users' => $userRepository->findBy([], ['username' => 'ASC'], 500),
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/carts/{id}/delete', name: 'admin_cart_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        CartRepository $cartRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_cart_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_carts');
        }

        $cart = $cartRepository->find($id);
        if (!$cart instanceof Cart) {
            $this->addFlash('error', 'Panier introuvable.');

            return $this->redirectToRoute('admin_carts');
        }

        try {
            $entityManager->remove($cart);
            $entityManager->flush();
            $this->addFlash('success', 'Panier supprime.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (panier lie a une commande).');
        }

        return $this->redirectToRoute('admin_carts');
    }

    #[Route('/admin/carts/export/{format}', name: 'admin_carts_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        CartRepository $cartRepository,
        CartItemRepository $cartItemRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'updated_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $carts = $cartRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $cartIds = [];
        foreach ($carts as $cart) {
            $cartId = $cart->getCartId();
            if (is_int($cartId) && $cartId > 0) {
                $cartIds[] = $cartId;
            }
        }
        $itemsByCartId = $cartItemRepository->countByCartIds($cartIds);

        $headers = ['ID', 'User', 'Status', 'Items', 'Created at', 'Updated at', 'Locked at'];
        $rows = [];
        foreach ($carts as $cart) {
            $cartId = (int) ($cart->getCartId() ?? 0);
            $rows[] = [
                $cartId,
                (string) ($cart->getUserId()?->getUsername() ?? '-'),
                (string) ($cart->getStatus() ?? '-'),
                (int) ($itemsByCartId[$cartId] ?? 0),
                $cart->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
                $cart->getUpdatedAt()?->format('Y-m-d H:i') ?? '-',
                $cart->getLockedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Paniers', $headers, $rows, sprintf('admin_carts_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Paniers', $headers, $rows, sprintf('admin_carts_%s.pdf', $fileSuffix));
    }

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'updated_at';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }

    private function parseDateTime(string $value): ?\DateTime
    {
        if ($value === '') {
            return null;
        }

        try {
            return new \DateTime($value);
        } catch (\Throwable) {
            return null;
        }
    }
}
