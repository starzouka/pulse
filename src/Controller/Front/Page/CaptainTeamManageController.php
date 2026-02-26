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
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Ai\TeamBrandingAssistant;
use App\Service\Location\OpenStreetMapGeocoder;
use App\Service\Media\ImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        }

        return $this->render('front/pages/captain-team-manage.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'team_form_mode' => $teamFormMode,
            'team_stats' => $teamStats,
            'google_recaptcha_site_key' => trim((string) ($_ENV['GOOGLE_RECAPTCHA_SITE_KEY'] ?? $_SERVER['GOOGLE_RECAPTCHA_SITE_KEY'] ?? '')),
        ]);
    }

    #[Route('/pages/captain-team-manage/ai-branding', name: 'front_captain_team_manage_ai_branding', methods: ['POST'])]
    public function generateBrandingSuggestion(
        Request $request,
        TeamBrandingAssistant $teamBrandingAssistant,
    ): JsonResponse {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->json(['ok' => false, 'message' => 'Non authentifié.'], 401);
        }

        if (!$this->isCsrfTokenValid('captain_team_branding_ai', (string) $request->request->get('_token'))) {
            return $this->json(['ok' => false, 'message' => 'CSRF invalide.'], 400);
        }

        $teamName = trim((string) $request->request->get('name', ''));
        $region = $this->normalizeNullableText($request->request->get('region'));
        $style = $this->normalizeNullableText($request->request->get('style_hint'));

        if ($teamName === '') {
            return $this->json(['ok' => false, 'message' => "Le nom de l'équipe est obligatoire pour générer un branding."], 422);
        }

        $suggestion = $teamBrandingAssistant->generate($teamName, $region, $style);

        return $this->json([
            'ok' => true,
            'data' => $suggestion,
        ]);
    }

    #[Route('/pages/captain-team-manage/create', name: 'front_captain_team_manage_create', methods: ['POST'])]
    public function create(
        Request $request,
        TeamRepository $teamRepository,
        ImageUploader $imageUploader,
        OpenStreetMapGeocoder $openStreetMapGeocoder,
        \App\Service\Security\GoogleRecaptchaVerifier $googleRecaptchaVerifier,
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
        $region = $this->normalizeNullableText($request->request->get('region'));
        $description = $this->normalizeNullableText($request->request->get('description'));
        $regionLookup = $openStreetMapGeocoder->geocodeRegion($region);
        if (is_array($regionLookup)) {
            $region = $regionLookup['normalized_region'];
        }
        $recaptcha = $googleRecaptchaVerifier->verifyRequest($request, 'captain_team_create');
        if (!$recaptcha['success']) {
            $this->addFlash('error', 'reCAPTCHA: ' . ($recaptcha['message'] ?? 'validation échouée'));
            return $this->redirectToRoute('front_captain_team_manage', ['mode' => 'create']);
        }

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
                ->setLeftAt(null)
                ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN),
        );

        $entityManager->flush();

        if (is_array($regionLookup)) {
            $this->addFlash('info', 'Région normalisée via OpenStreetMap: ' . $regionLookup['normalized_region']);
        }
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
        ImageUploader $imageUploader,
        OpenStreetMapGeocoder $openStreetMapGeocoder,
        \App\Service\Security\GoogleRecaptchaVerifier $googleRecaptchaVerifier,
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
        $region = $this->normalizeNullableText($request->request->get('region'));
        $description = $this->normalizeNullableText($request->request->get('description'));
        $regionLookup = $openStreetMapGeocoder->geocodeRegion($region);
        if (is_array($regionLookup)) {
            $region = $regionLookup['normalized_region'];
        }
        $recaptcha = $googleRecaptchaVerifier->verifyRequest($request, 'captain_team_update');
        if (!$recaptcha['success']) {
            $this->addFlash('error', 'reCAPTCHA: ' . ($recaptcha['message'] ?? 'validation échouée'));
            return $this->redirectToRoute('front_captain_team_manage', ['team' => $id]);
        }

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
                ->setLeftAt(null)
                ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN);
        } else {
            $entityManager->persist(
                (new TeamMember())
                    ->setTeamId($team)
                    ->setUserId($viewer)
                    ->setJoinedAt(new \DateTime())
                    ->setIsActive(true)
                    ->setLeftAt(null)
                    ->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN),
            );
        }

        $entityManager->flush();

        if (is_array($regionLookup)) {
            $this->addFlash('info', 'Région normalisée via OpenStreetMap: ' . $regionLookup['normalized_region']);
        }
        $this->addFlash('success', "L'equipe a ete mise a jour.");

        return $this->redirectToRoute('front_captain_team_manage', [
            'team' => $team->getTeamId(),
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
}
