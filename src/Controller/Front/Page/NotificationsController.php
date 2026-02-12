<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\NotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NotificationsController extends AbstractController
{
    #[Route('/pages/notifications', name: 'front_notifications', methods: ['GET'])]
    public function index(
        Request $request,
        NotificationRepository $notificationRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $onlyUnread = $request->query->getBoolean('unread');

        return $this->render('front/pages/notifications.html.twig', [
            'viewer_user' => $viewer,
            'notifications' => $notificationRepository->findLatestForUser($viewer, $onlyUnread, 100),
            'unread_count' => $notificationRepository->countUnreadForUser($viewer),
            'only_unread' => $onlyUnread,
        ]);
    }

    #[Route('/pages/notifications/mark-all-read', name: 'front_notifications_mark_all_read', methods: ['POST'])]
    public function markAllRead(
        Request $request,
        NotificationRepository $notificationRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('notifications_mark_all_read', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_notifications');
        }

        $notificationRepository->markAllAsReadForUser($viewer);
        $this->addFlash('success', 'Toutes les notifications sont marquees comme lues.');

        return $this->redirectToRoute('front_notifications');
    }
}
