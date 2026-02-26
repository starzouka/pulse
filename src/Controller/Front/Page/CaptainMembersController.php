<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Captain\RosterManager;
use App\Service\Pdf\CaptainRosterPdfExporter;
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
        RosterManager $rosterManager,
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
        $rosterStats = $rosterManager->buildRosterStats($activeTeam);

        return $this->render('front/pages/captain-members.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'active_members' => $activeMembers,
            'inactive_members' => $inactiveMembers,
            'roster_stats' => $rosterStats,
            'assignable_roster_roles' => $rosterManager->getAssignableRoles(),
        ]);
    }

    #[Route('/pages/captain-members/{teamId}/export/roster-pdf', name: 'front_captain_members_export_roster_pdf', requirements: ['teamId' => '\d+'], methods: ['GET'])]
    public function exportRosterPdf(
        int $teamId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamMemberRepository $teamMemberRepository,
        RosterManager $rosterManager,
        CaptainRosterPdfExporter $captainRosterPdfExporter,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $activeMembers = $teamMemberRepository->findByTeamWithUser($team, true);
        $inactiveMembers = $teamMemberRepository->findByTeamWithUser($team, false);
        $inactiveMembers = array_values(array_filter(
            $inactiveMembers,
            static fn (TeamMember $teamMember): bool => !$teamMember->isActive(),
        ));

        return $captainRosterPdfExporter->export($team, $activeMembers, $inactiveMembers, $rosterManager->buildRosterStats($team));
    }

    #[Route('/pages/captain-members/{teamId}/{userId}/role', name: 'front_captain_members_role', requirements: ['teamId' => '\d+', 'userId' => '\d+'], methods: ['POST'])]
    public function updateRole(
        int $teamId,
        int $userId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        RosterManager $rosterManager,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_member_role_' . $teamId . '_' . $userId, (string) $request->request->get('_token'))) {
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
        if (!$membership instanceof TeamMember || !$membership->isActive()) {
            $this->addFlash('error', 'Membre actif introuvable.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $newRole = $rosterManager->normalizeRole((string) $request->request->get('roster_role', ''));
        $validation = $rosterManager->validateRoleChange($team, $membership, $newRole);
        if (!$validation['ok']) {
            $this->addFlash('error', $validation['message']);

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $membership->setRosterRole($newRole);
        $entityManager->flush();

        $this->addFlash('success', 'Rôle roster mis à jour.');

        return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
    }

    #[Route('/pages/captain-members/{teamId}/{userId}/remove', name: 'front_captain_members_remove', requirements: ['teamId' => '\d+', 'userId' => '\d+'], methods: ['POST'])]
    public function remove(
        int $teamId,
        int $userId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        RosterManager $rosterManager,
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

    #[Route('/pages/captain-members/{teamId}/{userId}/reactivate', name: 'front_captain_members_reactivate', requirements: ['teamId' => '\d+', 'userId' => '\d+'], methods: ['POST'])]
    public function reactivate(
        int $teamId,
        int $userId,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        TeamMemberRepository $teamMemberRepository,
        RosterManager $rosterManager,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_member_reactivate_' . $teamId . '_' . $userId, (string) $request->request->get('_token'))) {
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
        if (!$membership instanceof TeamMember) {
            $this->addFlash('error', 'Historique membre introuvable.');

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $capacity = $rosterManager->validateAddActiveMember($team);
        if (!$capacity['ok']) {
            $this->addFlash('error', $capacity['message']);

            return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
        }

        $membership
            ->setIsActive(true)
            ->setLeftAt(null)
            ->setRosterRole($team->getCaptainUserId()?->getUserId() === $memberUser->getUserId()
                ? TeamMember::ROSTER_ROLE_CAPTAIN
                : TeamMember::ROSTER_ROLE_STARTER);

        $entityManager->flush();

        $this->addFlash('success', 'Membre réactivé dans le roster.');

        return $this->redirectToRoute('front_captain_members', ['team' => $teamId]);
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

