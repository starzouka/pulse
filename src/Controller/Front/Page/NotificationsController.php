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
    use PaginatesCollectionsTrait;

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
        $type = strtoupper(trim((string) $request->query->get('type', '')));
        if (!in_array($type, [
            '',
            'FRIEND_REQUEST',
            'TEAM_INVITE',
            'TEAM_JOIN_RESPONSE',
            'NEW_MESSAGE',
            'TOURNAMENT_REQUEST_STATUS',
            'ORDER_STATUS',
        ], true)) {
            $type = '';
        }

        $query = trim((string) $request->query->get('q', ''));
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'type'], true)) {
            $sort = 'latest';
        }

        $notifications = $notificationRepository->findForUserWithFilters(
            $viewer,
            $onlyUnread,
            $type !== '' ? $type : null,
            $query,
            $sort,
            500
        );
        $pagination = $this->paginateItems($notifications, $this->readPage($request), 12);

        return $this->render('front/pages/notifications.html.twig', [
            'viewer_user' => $viewer,
            'notifications' => $pagination['items'],
            'pagination' => $pagination,
            'unread_count' => $notificationRepository->countUnreadForUser($viewer),
            'only_unread' => $onlyUnread,
            'filters' => [
                'type' => $type,
                'q' => $query,
                'sort' => $sort,
            ],
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
