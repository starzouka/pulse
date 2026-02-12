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

        return $this->render('admin/pages/user-detail.html.twig', [
            'user' => $user,
            'teamMembers' => $teamMemberRepository->findBy(['userId' => $user], ['joinedAt' => 'DESC'], 100),
            'posts' => $postRepository->findBy(['authorUserId' => $user], ['createdAt' => 'DESC'], 100),
            'orders' => $orderRepository->findBy(['userId' => $user], ['createdAt' => 'DESC'], 100),
            'reports' => $reportRepository->findBy(['reporterUserId' => $user], ['createdAt' => 'DESC'], 100),
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
}
