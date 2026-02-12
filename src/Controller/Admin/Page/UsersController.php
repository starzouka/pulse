<?php

namespace App\Controller\Admin\Page;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UsersController extends AbstractController
{
    #[Route('/admin/users', name: 'admin_users', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'role' => strtoupper(trim((string) $request->query->get('role', ''))),
            'active' => trim((string) $request->query->get('active', '')),
            'verified' => trim((string) $request->query->get('verified', '')),
        ];

        $users = $userRepository->searchForAdmin(
            $filters['q'],
            $filters['role'],
            $this->parseBooleanFilter($filters['active']),
            $this->parseBooleanFilter($filters['verified']),
            500
        );

        return $this->render('admin/pages/users.html.twig', [
            'users' => $users,
            'filters' => $filters,
            'roleOptions' => [
                User::DOMAIN_ROLE_PLAYER,
                User::DOMAIN_ROLE_CAPTAIN,
                User::DOMAIN_ROLE_ORGANIZER,
                User::DOMAIN_ROLE_ADMIN,
            ],
        ]);
    }

    #[Route('/admin/users/{id}/delete', name: 'admin_user_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_user_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_users');
        }

        $user = $userRepository->find($id);
        if (!$user instanceof User) {
            $this->addFlash('error', 'Utilisateur introuvable.');

            return $this->redirectToRoute('admin_users');
        }

        $connectedUser = $this->getUser();
        if ($connectedUser instanceof User && $connectedUser->getUserId() === $user->getUserId()) {
            $this->addFlash('error', 'Suppression de votre propre compte admin interdite.');

            return $this->redirectToRoute('admin_users');
        }

        try {
            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur supprime avec succes.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (relations existantes).');
        }

        return $this->redirectToRoute('admin_users');
    }

    #[Route('/admin/users/export/{format}', name: 'admin_users_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        UserRepository $userRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'role' => strtoupper(trim((string) $request->query->get('role', ''))),
            'active' => trim((string) $request->query->get('active', '')),
            'verified' => trim((string) $request->query->get('verified', '')),
        ];

        $users = $userRepository->searchForAdmin(
            $filters['q'],
            $filters['role'],
            $this->parseBooleanFilter($filters['active']),
            $this->parseBooleanFilter($filters['verified']),
            5000
        );

        $headers = ['ID', 'Username', 'Email', 'Role', 'Actif', 'Email verifie', 'Pays', 'Creation'];
        $rows = [];
        foreach ($users as $user) {
            $rows[] = [
                (int) $user->getUserId(),
                (string) $user->getUsername(),
                (string) $user->getEmail(),
                (string) $user->getRole(),
                $user->isActive() ? 'Oui' : 'Non',
                $user->isEmailVerified() ? 'Oui' : 'Non',
                (string) ($user->getCountry() ?? '-'),
                $user->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');

        if ($format === 'excel') {
            return $tableExportService->exportExcel(
                'Utilisateurs',
                $headers,
                $rows,
                sprintf('admin_users_%s.xlsx', $fileSuffix)
            );
        }

        return $tableExportService->exportPdf(
            'Utilisateurs',
            $headers,
            $rows,
            sprintf('admin_users_%s.pdf', $fileSuffix)
        );
    }

    private function parseBooleanFilter(string $value): ?bool
    {
        $normalized = strtolower(trim($value));
        if ($normalized === '') {
            return null;
        }

        if (in_array($normalized, ['1', 'true', 'yes', 'oui'], true)) {
            return true;
        }

        if (in_array($normalized, ['0', 'false', 'no', 'non'], true)) {
            return false;
        }

        return null;
    }
}
