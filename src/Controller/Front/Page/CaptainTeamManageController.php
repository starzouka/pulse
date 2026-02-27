<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\TeamRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Ai\Generation\AssistedGenerationService;
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Media\ImageUploader;
use App\Service\Geo\OpenStreetMapGeocoder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTeamManageController extends AbstractController
{
    #[Route('/pages/captain-team-manage', name: 'front_captain_team_manage', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamMemberRepository $teamMemberRepository,
        ProductRepository $productRepository,
        TournamentTeamRepository $tournamentTeamRepository,
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

        $requestedMode = strtolower(trim((string) $request->query->get('mode', '')));
        $teamFormMode = ($requestedMode === 'create' || !$activeTeam instanceof Team) ? 'create' : 'edit';

        $teamStats = [
            'members' => 0,
            'products' => 0,
            'tournaments' => 0,
        ];
        $teamBranding = null;

        if ($activeTeam instanceof Team) {
            $teamStats['members'] = $teamMemberRepository->count([
                'teamId' => $activeTeam,
                'isActive' => true,
                'leftAt' => null,
            ]);
            $teamStats['products'] = $productRepository->count([
                'teamId' => $activeTeam,
            ]);
            $teamStats['tournaments'] = $tournamentTeamRepository->count([
                'teamId' => $activeTeam,
            ]);

            $session = $request->hasSession() ? $request->getSession() : null;
            if ($session instanceof SessionInterface) {
                $brandings = $this->readSessionArray($session, 'captain_team_branding_ai');
                $rawBranding = $brandings[(string) ($activeTeam->getTeamId() ?? 0)] ?? null;
                if (is_array($rawBranding)) {
                    $teamBranding = [
                        'bio' => trim((string) ($rawBranding['bio'] ?? '')),
                        'slogan' => trim((string) ($rawBranding['slogan'] ?? '')),
                        'style_hint' => trim((string) ($rawBranding['style_hint'] ?? '')),
                        'source' => trim((string) ($rawBranding['source'] ?? 'local_fallback')),
                        'provider' => trim((string) ($rawBranding['provider'] ?? 'local')),
                        'model' => trim((string) ($rawBranding['model'] ?? 'template-v1')),
                        'generated_at' => trim((string) ($rawBranding['generated_at'] ?? '')),
                    ];
                }
            }
        }

        return $this->render('front/pages/captain-team-manage.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'team_form_mode' => $teamFormMode,
            'team_stats' => $teamStats,
            'ai_team_branding' => $teamBranding,
        ]);
    }

    #[Route('/pages/captain-team-manage/create', name: 'front_captain_team_manage_create', methods: ['POST'])]
    public function create(
        Request $request,
        TeamRepository $teamRepository,
        OpenStreetMapGeocoder $openStreetMapGeocoder,
        ImageUploader $imageUploader,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_team_create', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $name = trim((string) $request->request->get('name', ''));
        $region = $openStreetMapGeocoder->normalizeRegion(
            $this->normalizeNullableText($request->request->get('region'))
        );
        $description = $this->normalizeNullableText($request->request->get('description'));

        if ($name === '') {
            $this->addFlash('error', "Le nom de l'equipe est obligatoire.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $existingTeam = $teamRepository->findOneBy(['name' => $name]);
        if ($existingTeam instanceof Team) {
            $this->addFlash('error', 'Une equipe avec ce nom existe deja.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $now = new \DateTime();
        $team = (new Team())
            ->setName($name)
            ->setRegion($region)
            ->setDescription($description)
            ->setCaptainUserId($viewer)
            ->setCreatedAt($now)
            ->setUpdatedAt($now);

        $uploadedLogo = $request->files->get('logo_file');
        if ($imageUploader->isValidImageUpload($uploadedLogo)) {
            $logoImage = $imageUploader->uploadImage(
                $uploadedLogo,
                $viewer,
                'teams',
                'team_logo',
                'Logo equipe ' . $name,
            );
            $entityManager->persist($logoImage);
            $team->setLogoImageId($logoImage);
        }

        $entityManager->persist($team);
        $entityManager->persist(
            (new TeamMember())
                ->setTeamId($team)
                ->setUserId($viewer)
                ->setJoinedAt($now)
                ->setIsActive(true)
                ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN)
                ->setLeftAt(null),
        );

        $entityManager->flush();

        $this->addFlash('success', "L'equipe a ete creee.");

        return $this->redirectToRoute('front_captain_team_manage', [
            'team' => $team->getTeamId(),
        ]);
    }

    #[Route('/pages/captain-team-manage/{id}/update', name: 'front_captain_team_manage_update', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function update(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        OpenStreetMapGeocoder $openStreetMapGeocoder,
        ImageUploader $imageUploader,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_team_update_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $id);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $name = trim((string) $request->request->get('name', ''));
        $region = $openStreetMapGeocoder->normalizeRegion(
            $this->normalizeNullableText($request->request->get('region'))
        );
        $description = $this->normalizeNullableText($request->request->get('description'));

        if ($name === '') {
            $this->addFlash('error', "Le nom de l'equipe est obligatoire.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $duplicateTeam = $teamRepository->findOneBy(['name' => $name]);
        if ($duplicateTeam instanceof Team && $duplicateTeam->getTeamId() !== $team->getTeamId()) {
            $this->addFlash('error', 'Une equipe avec ce nom existe deja.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $team
            ->setName($name)
            ->setRegion($region)
            ->setDescription($description)
            ->setUpdatedAt(new \DateTime());

        $uploadedLogo = $request->files->get('logo_file');
        if ($imageUploader->isValidImageUpload($uploadedLogo)) {
            $logoImage = $imageUploader->uploadImage(
                $uploadedLogo,
                $viewer,
                'teams',
                'team_logo',
                'Logo equipe ' . $name,
            );
            $entityManager->persist($logoImage);
            $team->setLogoImageId($logoImage);
        }

        $captainMembership = $teamMemberRepository->findOneByTeamAndUser($team, $viewer);
        if ($captainMembership instanceof TeamMember) {
            $captainMembership
                ->setIsActive(true)
                ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN)
                ->setLeftAt(null);
        } else {
            $entityManager->persist(
                (new TeamMember())
                    ->setTeamId($team)
                    ->setUserId($viewer)
                    ->setJoinedAt(new \DateTime())
                    ->setIsActive(true)
                    ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN)
                    ->setLeftAt(null),
            );
        }

        $entityManager->flush();

        $this->addFlash('success', "L'equipe a ete mise a jour.");

        return $this->redirectToRoute('front_captain_team_manage', [
            'team' => $team->getTeamId(),
        ]);
    }

    #[Route('/pages/captain-team-manage/normalize-region', name: 'front_captain_team_manage_normalize_region', methods: ['POST'])]
    public function normalizeRegion(
        Request $request,
        OpenStreetMapGeocoder $openStreetMapGeocoder,
    ): JsonResponse {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->json([
                'ok' => false,
                'error' => 'unauthorized',
                'message' => 'Session requise.',
            ], 401);
        }

        if (!$this->isCsrfTokenValid('captain_team_region_normalize', (string) $request->request->get('_token'))) {
            return $this->json([
                'ok' => false,
                'error' => 'csrf_invalid',
                'message' => 'Jeton CSRF invalide.',
            ], 403);
        }

        $rawRegion = $this->normalizeNullableText($request->request->get('region'));
        $latRaw = $request->request->get('latitude');
        $lonRaw = $request->request->get('longitude');

        $normalizedRegion = null;
        $source = 'input';

        if (is_scalar($latRaw) && is_scalar($lonRaw)) {
            $latitude = (float) $latRaw;
            $longitude = (float) $lonRaw;
            if (is_finite($latitude) && is_finite($longitude)) {
                $normalizedRegion = $openStreetMapGeocoder->normalizeCoordinates($latitude, $longitude);
                $source = 'osm_reverse';
            }
        }

        if ($normalizedRegion === null && $rawRegion !== null) {
            $normalizedRegion = $openStreetMapGeocoder->normalizeRegion($rawRegion);
            $source = 'osm_search';
        }

        if ($normalizedRegion === null) {
            return $this->json([
                'ok' => false,
                'error' => 'not_resolved',
                'message' => 'Region non resolue.',
            ]);
        }

        return $this->json([
            'ok' => true,
            'data' => [
                'region' => $normalizedRegion,
                'source' => $source,
            ],
        ]);
    }

    #[Route('/pages/captain-team-manage/{id}/generate-branding', name: 'front_captain_team_manage_generate_branding', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function generateBranding(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        AssistedGenerationService $assistedGenerationService,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_team_manage_generate_branding_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $id);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $styleHint = $this->normalizeNullableText($request->request->get('style_hint'));
        $generated = $assistedGenerationService->generateTeamBranding($team, $viewer, $styleHint);

        $session = $request->hasSession() ? $request->getSession() : null;
        if ($session instanceof SessionInterface) {
            $brandings = $this->readSessionArray($session, 'captain_team_branding_ai');
            $brandings[(string) $id] = [
                'bio' => $this->truncate(trim((string) ($generated['bio'] ?? '')), 300),
                'slogan' => $this->truncate(trim((string) ($generated['slogan'] ?? '')), 70),
                'style_hint' => $styleHint ?? '',
                'source' => trim((string) ($generated['source'] ?? 'local_fallback')),
                'provider' => trim((string) ($generated['provider'] ?? 'local')),
                'model' => trim((string) ($generated['model'] ?? 'template-v1')),
                'generated_at' => (new \DateTimeImmutable())->format('Y-m-d H:i'),
            ];
            $session->set('captain_team_branding_ai', $brandings);
        }

        $this->addFlash(
            'success',
            sprintf(
                'Branding IA genere (%s/%s).',
                trim((string) ($generated['provider'] ?? 'local')),
                trim((string) ($generated['source'] ?? 'local_fallback'))
            )
        );

        return $this->redirectToRoute('front_captain_team_manage', [
            'team' => $id,
        ]);
    }

    #[Route('/pages/captain-team-manage/{id}/apply-branding', name: 'front_captain_team_manage_apply_branding', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function applyBranding(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_team_manage_apply_branding_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $id);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $session = $request->hasSession() ? $request->getSession() : null;
        $brandings = $session instanceof SessionInterface
            ? $this->readSessionArray($session, 'captain_team_branding_ai')
            : [];

        $branding = $brandings[(string) $id] ?? null;
        if (!is_array($branding) || trim((string) ($branding['bio'] ?? '')) === '') {
            $this->addFlash('error', 'Aucun branding IA a appliquer.');

            return $this->redirectToRoute('front_captain_team_manage', [
                'team' => $id,
            ]);
        }

        $team->setDescription($this->truncate(trim((string) ($branding['bio'] ?? '')), 2000));
        $team->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', "Le branding IA a ete applique sur la fiche equipe.");

        return $this->redirectToRoute('front_captain_team_manage', [
            'team' => $id,
        ]);
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }

    private function normalizeNullableText(mixed $rawValue): ?string
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = trim((string) $rawValue);

        return $value !== '' ? $value : null;
    }

    /**
     * @return array<string, mixed>
     */
    private function readSessionArray(SessionInterface $session, string $key): array
    {
        $value = $session->get($key);

        return is_array($value) ? $value : [];
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
