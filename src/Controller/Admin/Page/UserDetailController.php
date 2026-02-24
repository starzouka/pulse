<?php

namespace App\Controller\Admin\Page;

use App\Entity\User;
use App\Repository\OrderRepository;
use App\Repository\PostRepository;
use App\Repository\ReportRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserDetailController extends AbstractController
{
    #[Route('/admin/user-detail/{id}', name: 'admin_user_detail', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(
        int $id,
        Request $request,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        PostRepository $postRepository,
        OrderRepository $orderRepository,
        ReportRepository $reportRepository
    ): Response {
        $user = $userRepository->find($id);
        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $sorts = [
            'teams' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('teams_sort', 'joined_at'),
                    ['team_id', 'joined_at', 'is_active'],
                    'joined_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('teams_direction', 'desc')),
            ],
            'posts' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('posts_sort', 'created_at'),
                    ['id', 'content', 'visibility', 'deleted', 'created_at'],
                    'created_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('posts_direction', 'desc')),
            ],
            'orders' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('orders_sort', 'created_at'),
                    ['order_number', 'status', 'total_amount', 'created_at'],
                    'created_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('orders_direction', 'desc')),
            ],
            'reports' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('reports_sort', 'created_at'),
                    ['id', 'target', 'target_id', 'status', 'created_at'],
                    'created_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('reports_direction', 'desc')),
            ],
        ];

        $teamOrderMap = [
            'team_id' => 'teamId',
            'joined_at' => 'joinedAt',
            'is_active' => 'isActive',
        ];
        $postOrderMap = [
            'id' => 'postId',
            'content' => 'contentText',
            'visibility' => 'visibility',
            'deleted' => 'isDeleted',
            'created_at' => 'createdAt',
        ];
        $orderOrderMap = [
            'order_number' => 'orderNumber',
            'status' => 'status',
            'total_amount' => 'totalAmount',
            'created_at' => 'createdAt',
        ];
        $reportOrderMap = [
            'id' => 'reportId',
            'target' => 'targetType',
            'target_id' => 'targetId',
            'status' => 'status',
            'created_at' => 'createdAt',
        ];

        $teamOrderBy = [
            $teamOrderMap[$sorts['teams']['sort']] => strtoupper($sorts['teams']['direction']),
        ];
        $postOrderBy = [
            $postOrderMap[$sorts['posts']['sort']] => strtoupper($sorts['posts']['direction']),
        ];
        $orderOrderBy = [
            $orderOrderMap[$sorts['orders']['sort']] => strtoupper($sorts['orders']['direction']),
        ];
        $reportOrderBy = [
            $reportOrderMap[$sorts['reports']['sort']] => strtoupper($sorts['reports']['direction']),
        ];

        return $this->render('admin/pages/user-detail.html.twig', [
            'user' => $user,
            'teamMembers' => $teamMemberRepository->findBy(['userId' => $user], $teamOrderBy, 100),
            'posts' => $postRepository->findBy(['authorUserId' => $user], $postOrderBy, 100),
            'orders' => $orderRepository->findBy(['userId' => $user], $orderOrderBy, 100),
            'reports' => $reportRepository->findBy(['reporterUserId' => $user], $reportOrderBy, 100),
            'sorts' => $sorts,
        ]);
    }

    #[Route('/admin/user-detail', name: 'admin_user_detail_legacy', methods: ['GET'])]
    public function legacy(Request $request): Response
    {
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            return $this->redirectToRoute('admin_user_detail', ['id' => $id]);
        }

        return $this->redirectToRoute('admin_users');
    }

    /**
     * @param list<string> $allowed
     */
    private function sanitizeSort(string $value, array $allowed, string $default): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, $allowed, true) ? $normalized : $default;
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }
}
