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
    /** @var list<string> */
    private const SORTS = [
        'id',
        'username',
        'email',
        'role',
        'active',
        'verified',
        'country',
        'created_at',
        'last_login_at',
    ];

    #[Route('/admin/users', name: 'admin_users', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'role' => strtoupper(trim((string) $request->query->get('role', ''))),
            'active' => trim((string) $request->query->get('active', '')),
            'verified' => trim((string) $request->query->get('verified', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $users = $userRepository->searchForAdmin(
            $filters['q'],
            $filters['role'],
            $this->parseBooleanFilter($filters['active']),
            $this->parseBooleanFilter($filters['verified']),
            $filters['sort'],
            $filters['direction'],
            500
        );

        $userStats = $this->buildUserStats($users);
        $userCharts = $this->buildUserCharts($users);

        return $this->render('admin/pages/users.html.twig', [
            'users' => $users,
            'filters' => $filters,
            'userStats' => $userStats,
            'userCharts' => $userCharts,
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
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $users = $userRepository->searchForAdmin(
            $filters['q'],
            $filters['role'],
            $this->parseBooleanFilter($filters['active']),
            $this->parseBooleanFilter($filters['verified']),
            $filters['sort'],
            $filters['direction'],
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

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'created_at';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }

    /**
     * @param list<User> $users
     * @return array<string, mixed>
     */
    private function buildUserStats(array $users): array
    {
        $total = count($users);
        $active = 0;
        $verified = 0;
        $neverLoggedIn = 0;
        $loggedLast7d = 0;
        $newLast7d = 0;
        $newLast30d = 0;
        $roleCounts = [
            User::DOMAIN_ROLE_PLAYER => 0,
            User::DOMAIN_ROLE_CAPTAIN => 0,
            User::DOMAIN_ROLE_ORGANIZER => 0,
            User::DOMAIN_ROLE_ADMIN => 0,
        ];
        $countryCounts = [];

        $now = new \DateTimeImmutable();
        $last7d = $now->sub(new \DateInterval('P7D'));
        $last30d = $now->sub(new \DateInterval('P30D'));

        foreach ($users as $user) {
            if ($user->isActive()) {
                ++$active;
            }

            if ($user->isEmailVerified()) {
                ++$verified;
            }

            $role = $user->getRole();
            if (array_key_exists($role, $roleCounts)) {
                ++$roleCounts[$role];
            }

            $country = trim((string) ($user->getCountry() ?? ''));
            if ($country !== '') {
                $countryCounts[$country] = ($countryCounts[$country] ?? 0) + 1;
            }

            $createdAt = $user->getCreatedAt();
            if ($createdAt instanceof \DateTimeInterface) {
                $createdAtImmutable = $createdAt instanceof \DateTimeImmutable ? $createdAt : \DateTimeImmutable::createFromMutable($createdAt);
                if ($createdAtImmutable >= $last7d) {
                    ++$newLast7d;
                }
                if ($createdAtImmutable >= $last30d) {
                    ++$newLast30d;
                }
            }

            $lastLoginAt = $user->getLastLoginAt();
            if (!$lastLoginAt instanceof \DateTimeInterface) {
                ++$neverLoggedIn;
                continue;
            }

            $lastLoginImmutable = $lastLoginAt instanceof \DateTimeImmutable ? $lastLoginAt : \DateTimeImmutable::createFromMutable($lastLoginAt);
            if ($lastLoginImmutable >= $last7d) {
                ++$loggedLast7d;
            }
        }

        arsort($countryCounts);
        $topCountries = [];
        foreach (array_slice($countryCounts, 0, 5, true) as $countryName => $count) {
            $topCountries[] = [
                'name' => $countryName,
                'count' => $count,
            ];
        }

        $inactive = max(0, $total - $active);
        $unverified = max(0, $total - $verified);

        return [
            'total' => $total,
            'active' => $active,
            'inactive' => $inactive,
            'verified' => $verified,
            'unverified' => $unverified,
            'neverLoggedIn' => $neverLoggedIn,
            'loggedLast7d' => $loggedLast7d,
            'newLast7d' => $newLast7d,
            'newLast30d' => $newLast30d,
            'countriesCount' => count($countryCounts),
            'topCountries' => $topCountries,
            'roleCounts' => $roleCounts,
            'activeRate' => $total > 0 ? (int) round(($active / $total) * 100) : 0,
            'verifiedRate' => $total > 0 ? (int) round(($verified / $total) * 100) : 0,
        ];
    }

    /**
     * @param list<User> $users
     * @return array<string, array<string, list<int|string>>>
     */
    private function buildUserCharts(array $users): array
    {
        $monthLabels = [];
        $monthCounts = [];
        $monthKeys = [];
        $monthNames = [
            1 => 'Jan',
            2 => 'Fev',
            3 => 'Mar',
            4 => 'Avr',
            5 => 'Mai',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Aou',
            9 => 'Sep',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Dec',
        ];

        $currentMonth = (new \DateTimeImmutable('first day of this month'))->setTime(0, 0);
        for ($offset = 5; $offset >= 0; --$offset) {
            $month = $currentMonth->sub(new \DateInterval('P' . $offset . 'M'));
            $key = $month->format('Y-m');
            $monthKeys[$key] = count($monthCounts);
            $monthCounts[] = 0;
            $monthLabels[] = sprintf('%s %s', $monthNames[(int) $month->format('n')] ?? $month->format('M'), $month->format('y'));
        }

        $roleCounts = [
            User::DOMAIN_ROLE_PLAYER => 0,
            User::DOMAIN_ROLE_CAPTAIN => 0,
            User::DOMAIN_ROLE_ORGANIZER => 0,
            User::DOMAIN_ROLE_ADMIN => 0,
        ];

        $loginBuckets = [
            '<= 7j' => 0,
            '8-30j' => 0,
            '> 30j' => 0,
            'Jamais' => 0,
        ];

        $now = new \DateTimeImmutable();
        $last7d = $now->sub(new \DateInterval('P7D'));
        $last30d = $now->sub(new \DateInterval('P30D'));

        foreach ($users as $user) {
            $role = $user->getRole();
            if (array_key_exists($role, $roleCounts)) {
                ++$roleCounts[$role];
            }

            $createdAt = $user->getCreatedAt();
            if ($createdAt instanceof \DateTimeInterface) {
                $createdKey = $createdAt->format('Y-m');
                if (array_key_exists($createdKey, $monthKeys)) {
                    ++$monthCounts[$monthKeys[$createdKey]];
                }
            }

            $lastLoginAt = $user->getLastLoginAt();
            if (!$lastLoginAt instanceof \DateTimeInterface) {
                ++$loginBuckets['Jamais'];
                continue;
            }

            $lastLoginImmutable = $lastLoginAt instanceof \DateTimeImmutable ? $lastLoginAt : \DateTimeImmutable::createFromMutable($lastLoginAt);
            if ($lastLoginImmutable >= $last7d) {
                ++$loginBuckets['<= 7j'];
            } elseif ($lastLoginImmutable >= $last30d) {
                ++$loginBuckets['8-30j'];
            } else {
                ++$loginBuckets['> 30j'];
            }
        }

        return [
            'registrationsByMonth' => [
                'labels' => $monthLabels,
                'data' => $monthCounts,
            ],
            'roles' => [
                'labels' => array_keys($roleCounts),
                'data' => array_values($roleCounts),
            ],
            'lastLoginBuckets' => [
                'labels' => array_keys($loginBuckets),
                'data' => array_values($loginBuckets),
            ],
        ];
    }
}
