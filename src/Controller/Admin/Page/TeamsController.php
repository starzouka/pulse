<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Team;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Service\Admin\TableExportService;
use App\Service\Media\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamsController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'name', 'region', 'captain', 'members', 'products', 'created_at'];

    #[Route('/admin/teams', name: 'admin_teams', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        ProductRepository $productRepository,
        UserRepository $userRepository,
        ImageUploader $imageUploader,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingTeam = $editId > 0 ? $teamRepository->findOneWithRelationsById($editId) : null;
        if ($editId > 0 && !$editingTeam instanceof Team) {
            $this->addFlash('error', 'Equipe introuvable pour edition.');

            return $this->redirectToRoute('admin_teams');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_team_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_teams');
            }

            $teamId = $request->request->getInt('team_id', 0);
            $team = $teamId > 0 ? $teamRepository->find($teamId) : new Team();
            if (!$team instanceof Team) {
                $this->addFlash('error', 'Equipe introuvable.');

                return $this->redirectToRoute('admin_teams');
            }

            $name = trim((string) $request->request->get('name', ''));
            $description = trim((string) $request->request->get('description', ''));
            $region = trim((string) $request->request->get('region', ''));
            $captainId = $request->request->getInt('captain_user_id', 0);
            $uploadedLogo = $request->files->get('logo_file');

            if ($name === '') {
                $this->addFlash('error', 'Le nom de l\'equipe est obligatoire.');

                return $this->redirectToRoute('admin_teams', $teamId > 0 ? ['edit' => $teamId] : []);
            }

            $captain = $userRepository->find($captainId);
            if (!$captain instanceof User) {
                $this->addFlash('error', 'Capitaine invalide.');

                return $this->redirectToRoute('admin_teams', $teamId > 0 ? ['edit' => $teamId] : []);
            }

            $team
                ->setName($name)
                ->setDescription($description !== '' ? $description : null)
                ->setRegion($region !== '' ? $region : null)
                ->setCaptainUserId($captain)
                ->setUpdatedAt(new \DateTime());

            if ($teamId <= 0) {
                $team->setCreatedAt(new \DateTime());
                $entityManager->persist($team);
            }

            if ($uploadedLogo !== null) {
                if (!$imageUploader->isValidImageUpload($uploadedLogo)) {
                    $this->addFlash('error', 'Logo invalide. Formats acceptes: jpg, png, webp, gif.');

                    return $this->redirectToRoute('admin_teams', $teamId > 0 ? ['edit' => $teamId] : []);
                }

                $connectedUser = $this->getUser();
                if (!$connectedUser instanceof User) {
                    $this->addFlash('error', 'Session invalide pour uploader un logo.');

                    return $this->redirectToRoute('admin_teams', $teamId > 0 ? ['edit' => $teamId] : []);
                }

                $logoImage = $imageUploader->uploadImage(
                    $uploadedLogo,
                    $connectedUser,
                    'admin/teams',
                    'team_logo',
                    'Logo equipe ' . $name,
                );
                $entityManager->persist($logoImage);
                $team->setLogoImageId($logoImage);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', $teamId > 0 ? 'Equipe mise a jour.' : 'Equipe creee.');

                return $this->redirectToRoute('admin_teams');
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (nom deja utilise ou liaison invalide).');

                return $this->redirectToRoute('admin_teams', $teamId > 0 ? ['edit' => $teamId] : []);
            }
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'region' => trim((string) $request->query->get('region', '')),
            'captain' => trim((string) $request->query->get('captain', '')),
            'with_products' => trim((string) $request->query->get('with_products', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $teams = $teamRepository->searchForAdmin(
            $filters['q'],
            $filters['region'],
            $filters['captain'],
            $this->parseBooleanFilter($filters['with_products']),
            $filters['sort'],
            $filters['direction'],
            500
        );

        $teamIds = [];
        foreach ($teams as $team) {
            $teamEntityId = $team->getTeamId();
            if (is_int($teamEntityId) && $teamEntityId > 0) {
                $teamIds[] = $teamEntityId;
            }
        }

        $membersByTeamId = $teamMemberRepository->countActiveByTeamIds($teamIds);
        $productsByTeamId = $productRepository->countByTeamIds($teamIds, false);

        return $this->render('admin/pages/teams.html.twig', [
            'teams' => $teams,
            'editingTeam' => $editingTeam,
            'membersByTeamId' => $membersByTeamId,
            'productsByTeamId' => $productsByTeamId,
            'captains' => $userRepository->findBy(['isActive' => true], ['username' => 'ASC'], 500),
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/teams/{id}/delete', name: 'admin_team_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        TeamRepository $teamRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_team_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_teams');
        }

        $team = $teamRepository->find($id);
        if (!$team instanceof Team) {
            $this->addFlash('error', 'Equipe introuvable.');

            return $this->redirectToRoute('admin_teams');
        }

        try {
            $entityManager->remove($team);
            $entityManager->flush();
            $this->addFlash('success', 'Equipe supprimee.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (liaisons existantes).');
        }

        return $this->redirectToRoute('admin_teams');
    }

    #[Route('/admin/teams/export/{format}', name: 'admin_teams_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        ProductRepository $productRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'region' => trim((string) $request->query->get('region', '')),
            'captain' => trim((string) $request->query->get('captain', '')),
            'with_products' => trim((string) $request->query->get('with_products', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $teams = $teamRepository->searchForAdmin(
            $filters['q'],
            $filters['region'],
            $filters['captain'],
            $this->parseBooleanFilter($filters['with_products']),
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $teamIds = [];
        foreach ($teams as $team) {
            $teamId = $team->getTeamId();
            if (is_int($teamId) && $teamId > 0) {
                $teamIds[] = $teamId;
            }
        }

        $membersByTeamId = $teamMemberRepository->countActiveByTeamIds($teamIds);
        $productsByTeamId = $productRepository->countByTeamIds($teamIds, false);

        $headers = ['ID', 'Nom', 'Region', 'Capitaine', 'Membres', 'Produits', 'Cree le'];
        $rows = [];
        foreach ($teams as $team) {
            $teamId = (int) ($team->getTeamId() ?? 0);
            $rows[] = [
                $teamId,
                (string) ($team->getName() ?? '-'),
                (string) ($team->getRegion() ?? '-'),
                (string) ($team->getCaptainUserId()?->getUsername() ?? '-'),
                (int) ($membersByTeamId[$teamId] ?? 0),
                (int) ($productsByTeamId[$teamId] ?? 0),
                $team->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Equipes', $headers, $rows, sprintf('admin_teams_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Equipes', $headers, $rows, sprintf('admin_teams_%s.pdf', $fileSuffix));
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
}
