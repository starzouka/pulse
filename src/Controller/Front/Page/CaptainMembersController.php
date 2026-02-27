<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Captain\TeamRosterPdfService;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainMembersController extends AbstractController
{
    #[Route('/pages/captain-members', name: 'front_captain_members', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamMemberRepository $teamMemberRepository,
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

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $activeMembers = $teamMemberRepository->findByTeamWithUser($activeTeam, true);
        $inactiveMembers = $teamMemberRepository->findByTeamWithUser($activeTeam, false);
        $inactiveMembers = array_values(array_filter(
            $inactiveMembers,
            static fn (TeamMember $teamMember): bool => !$teamMember->isActive(),
        ));

        $roleDistribution = $teamMemberRepository->countActiveByRosterRole($activeTeam);
        $rosterChart = $this->buildRosterDistributionChart($roleDistribution);

        return $this->render('front/pages/captain-members.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'active_members' => $activeMembers,
            'inactive_members' => $inactiveMembers,
            'roster_roles' => TeamMember::getRosterRoles(),
            'roster_distribution' => $roleDistribution,
            'roster_chart' => $rosterChart,
        ]);
    }

    #[Route('/pages/captain-members/{teamId}/{userId}/remove', name: 'front_captain_members_remove', requirements: ['teamId' => '\d+', 'userId' => '\d+'], methods: ['POST'])]
    public function remove(
        int $teamId,
        int $userId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_member_remove_' . $teamId . '_' . $userId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        if ($team->getCaptainUserId()?->getUserId() === $userId) {
            $this->addFlash('error', 'Le capitaine ne peut pas se retirer lui-meme depuis cette page.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $memberUser = $userRepository->find($userId);
        if (!$memberUser instanceof User) {
            $this->addFlash('error', 'Membre introuvable.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $membership = $teamMemberRepository->findOneByTeamAndUser($team, $memberUser);
        if (!$membership instanceof TeamMember) {
            $this->addFlash('error', "Ce joueur n'est pas membre de cette equipe.");

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $membership
            ->setIsActive(false)
            ->setLeftAt(new \DateTime());

        $entityManager->flush();

        $this->addFlash('success', 'Le membre a ete retire de la liste active.');

        return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
    }

    #[Route('/pages/captain-members/{teamId}/{userId}/roster-role', name: 'front_captain_members_roster_role', requirements: ['teamId' => '\d+', 'userId' => '\d+'], methods: ['POST'])]
    public function updateRosterRole(
        int $teamId,
        int $userId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_member_roster_role_' . $teamId . '_' . $userId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $memberUser = $userRepository->find($userId);
        if (!$memberUser instanceof User) {
            $this->addFlash('error', 'Membre introuvable.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $membership = $teamMemberRepository->findOneByTeamAndUser($team, $memberUser);
        if (!$membership instanceof TeamMember || $membership->isActive() !== true || $membership->getLeftAt() !== null) {
            $this->addFlash('error', "Le role roster ne peut etre modifie que pour un membre actif.");

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $requestedRole = strtoupper(trim((string) $request->request->get('roster_role', '')));
        if (!in_array($requestedRole, TeamMember::getRosterRoles(), true)) {
            $this->addFlash('error', 'Role roster invalide.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $captainUserId = $team->getCaptainUserId()?->getUserId();
        if ($captainUserId === $userId) {
            $membership->setRosterRole(TeamMember::ROSTER_ROLE_CAPTAIN);
        } elseif ($requestedRole === TeamMember::ROSTER_ROLE_CAPTAIN) {
            $this->addFlash('error', 'Seul le capitaine principal peut avoir le role CAPTAIN.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        } else {
            $membership->setRosterRole($requestedRole);
        }

        $entityManager->flush();

        $this->addFlash('success', 'Le role roster a ete mis a jour.');

        return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
    }

    #[Route('/pages/captain-members/{teamId}/roster-sheet', name: 'front_captain_members_roster_pdf', requirements: ['teamId' => '\d+'], methods: ['GET'])]
    public function rosterPdf(
        int $teamId,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamRosterPdfService $teamRosterPdfService,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        return $teamRosterPdfService->buildResponse($team);
    }

    /**
     * @param array{CAPTAIN:int,CO_CAPTAIN:int,STARTER:int,SUBSTITUTE:int} $roleDistribution
     */
    private function buildRosterDistributionChart(array $roleDistribution): PieChart
    {
        $chart = new PieChart();
        $chart->getData()->setArrayToDataTable([
            ['Role', 'Membres'],
            [TeamMember::ROSTER_ROLE_CAPTAIN, $roleDistribution[TeamMember::ROSTER_ROLE_CAPTAIN]],
            [TeamMember::ROSTER_ROLE_CO_CAPTAIN, $roleDistribution[TeamMember::ROSTER_ROLE_CO_CAPTAIN]],
            [TeamMember::ROSTER_ROLE_STARTER, $roleDistribution[TeamMember::ROSTER_ROLE_STARTER]],
            [TeamMember::ROSTER_ROLE_SUBSTITUTE, $roleDistribution[TeamMember::ROSTER_ROLE_SUBSTITUTE]],
        ]);

        $chart->getOptions()->setTitle('Repartition du roster actif');
        $chart->getOptions()->setHeight(320);
        $chart->getOptions()->setPieHole(0.45);
        $chart->getOptions()->setPieSliceText('value');
        $chart->getOptions()->setColors([
            '#1d4ed8',
            '#0f766e',
            '#f59e0b',
            '#94a3b8',
        ]);
        $chart->getOptions()->getLegend()->setPosition('right');

        return $chart;
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }
}

