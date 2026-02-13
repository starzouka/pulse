<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Cart;
use App\Entity\Order;
use App\Entity\User;
use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrdersController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'order_number', 'user', 'status', 'payment_status', 'total_amount', 'paid_at', 'created_at'];

    #[Route('/admin/orders', name: 'admin_orders', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        OrderRepository $orderRepository,
        CartRepository $cartRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingOrder = $editId > 0 ? $orderRepository->findOneWithRelationsById($editId) : null;
        if ($editId > 0 && !$editingOrder instanceof Order) {
            $this->addFlash('error', 'Commande introuvable pour edition.');

            return $this->redirectToRoute('admin_orders');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_order_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_orders');
            }

            $orderId = $request->request->getInt('order_id', 0);
            $order = $orderId > 0 ? $orderRepository->find($orderId) : new Order();
            if (!$order instanceof Order) {
                $this->addFlash('error', 'Commande introuvable.');

                return $this->redirectToRoute('admin_orders');
            }

            $orderNumber = trim((string) $request->request->get('order_number', ''));
            $userId = $request->request->getInt('user_id', 0);
            $cartId = $request->request->getInt('cart_id', 0);
            $status = strtoupper(trim((string) $request->request->get('status', 'PENDING')));
            $paymentStatus = strtoupper(trim((string) $request->request->get('payment_status', 'UNPAID')));
            $paymentMethod = strtoupper(trim((string) $request->request->get('payment_method', '')));
            $totalAmountRaw = trim((string) $request->request->get('total_amount', '0'));
            $shippingAddress = trim((string) $request->request->get('shipping_address', ''));
            $phoneForDelivery = trim((string) $request->request->get('phone_for_delivery', ''));
            $paidAt = $this->parseDateTime(trim((string) $request->request->get('paid_at', '')));
            $shippedAt = $this->parseDateTime(trim((string) $request->request->get('shipped_at', '')));
            $deliveredAt = $this->parseDateTime(trim((string) $request->request->get('delivered_at', '')));

            if ($orderNumber === '') {
                $this->addFlash('error', 'Le numero de commande est obligatoire.');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }

            if (!is_numeric($totalAmountRaw) || (float) $totalAmountRaw < 0) {
                $this->addFlash('error', 'Montant total invalide.');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }

            $user = $userRepository->find($userId);
            if (!$user instanceof User) {
                $this->addFlash('error', 'Utilisateur invalide.');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }

            $cart = $cartRepository->find($cartId);
            if (!$cart instanceof Cart) {
                $this->addFlash('error', 'Panier invalide.');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }

            if (($cart->getUserId()?->getUserId() ?? 0) !== ($user->getUserId() ?? -1)) {
                $this->addFlash('error', 'Le panier selectionne n appartient pas a cet utilisateur.');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }

            if (!in_array($status, ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'], true)) {
                $status = 'PENDING';
            }
            if (!in_array($paymentStatus, ['UNPAID', 'PAID', 'REFUNDED'], true)) {
                $paymentStatus = 'UNPAID';
            }
            if ($paymentMethod !== '' && !in_array($paymentMethod, ['CARD', 'CASH', 'OTHER'], true)) {
                $paymentMethod = '';
            }

            $order
                ->setOrderNumber($orderNumber)
                ->setUserId($user)
                ->setCartId($cart)
                ->setStatus($status)
                ->setPaymentStatus($paymentStatus)
                ->setPaymentMethod($paymentMethod !== '' ? $paymentMethod : null)
                ->setTotalAmount(number_format((float) $totalAmountRaw, 2, '.', ''))
                ->setShippingAddress($shippingAddress !== '' ? $shippingAddress : null)
                ->setPhoneForDelivery($phoneForDelivery !== '' ? $phoneForDelivery : null)
                ->setPaidAt($paidAt)
                ->setShippedAt($shippedAt)
                ->setDeliveredAt($deliveredAt);

            if ($orderId <= 0) {
                $order->setCreatedAt(new \DateTime());
                $entityManager->persist($order);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', $orderId > 0 ? 'Commande mise a jour.' : 'Commande creee.');

                return $this->redirectToRoute('admin_orders');
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (numero/correspondance panier deja utilises).');

                return $this->redirectToRoute('admin_orders', $orderId > 0 ? ['edit' => $orderId] : []);
            }
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'payment_status' => strtoupper(trim((string) $request->query->get('payment_status', ''))),
            'user' => trim((string) $request->query->get('user', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $orders = $orderRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['payment_status'],
            $filters['user'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        return $this->render('admin/pages/orders.html.twig', [
            'orders' => $orders,
            'editingOrder' => $editingOrder,
            'users' => $userRepository->findBy([], ['username' => 'ASC'], 500),
            'carts' => $cartRepository->findBy([], ['cartId' => 'DESC'], 1000),
            'filters' => $filters,
            'statusOptions' => ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'],
            'paymentStatusOptions' => ['UNPAID', 'PAID', 'REFUNDED'],
            'paymentMethodOptions' => ['CARD', 'CASH', 'OTHER'],
        ]);
    }

    #[Route('/admin/orders/{id}/delete', name: 'admin_order_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        OrderRepository $orderRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_order_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_orders');
        }

        $order = $orderRepository->find($id);
        if (!$order instanceof Order) {
            $this->addFlash('error', 'Commande introuvable.');

            return $this->redirectToRoute('admin_orders');
        }

        try {
            $entityManager->remove($order);
            $entityManager->flush();
            $this->addFlash('success', 'Commande supprimee.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible.');
        }

        return $this->redirectToRoute('admin_orders');
    }

    #[Route('/admin/orders/export/{format}', name: 'admin_orders_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        OrderRepository $orderRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'payment_status' => strtoupper(trim((string) $request->query->get('payment_status', ''))),
            'user' => trim((string) $request->query->get('user', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $orders = $orderRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['payment_status'],
            $filters['user'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $headers = [
            'ID',
            'Order number',
            'User',
            'Cart',
            'Status',
            'Payment status',
            'Payment method',
            'Total',
            'Created',
            'Paid',
            'Shipped',
            'Delivered',
        ];
        $rows = [];
        foreach ($orders as $order) {
            $rows[] = [
                (int) ($order->getOrderId() ?? 0),
                (string) ($order->getOrderNumber() ?? '-'),
                (string) ($order->getUserId()?->getUsername() ?? '-'),
                (int) ($order->getCartId()?->getCartId() ?? 0),
                (string) ($order->getStatus() ?? '-'),
                (string) ($order->getPaymentStatus() ?? '-'),
                (string) ($order->getPaymentMethod() ?? '-'),
                (string) ($order->getTotalAmount() ?? '0.00'),
                $order->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
                $order->getPaidAt()?->format('Y-m-d H:i') ?? '-',
                $order->getShippedAt()?->format('Y-m-d H:i') ?? '-',
                $order->getDeliveredAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Commandes', $headers, $rows, sprintf('admin_orders_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Commandes', $headers, $rows, sprintf('admin_orders_%s.pdf', $fileSuffix));
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
