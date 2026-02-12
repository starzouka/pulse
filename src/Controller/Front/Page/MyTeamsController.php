<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamInviteRepository;
use App\Repository\TeamMemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyTeamsController extends AbstractController
{
    #[Route('/pages/my-teams', name: 'front_my_teams', methods: ['GET'])]
    public function index(
        Request $request,
        TeamMemberRepository $teamMemberRepository,
        TeamInviteRepository $teamInviteRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $activeTeamMembers = $teamMemberRepository->findActiveByUser($viewer, 50);
        $pendingInvites = $teamInviteRepository->findLatestForInvitedUser($viewer, 'PENDING', 50);

        return $this->render('front/pages/my-teams.html.twig', [
            'viewer_user' => $viewer,
            'active_team_members' => $activeTeamMembers,
            'pending_team_invites' => $pendingInvites,
        ]);
    }

    #[Route('/pages/my-teams/invites/{id}/respond', name: 'front_my_teams_invite_respond', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function respondInvite(
        int $id,
        Request $request,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('team_invite_respond_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_my_teams');
        }

        $invite = $teamInviteRepository->findOnePendingByIdForUser($id, $viewer);
        if ($invite === null) {
            $this->addFlash('error', 'Invitation introuvable.');
            return $this->redirectToRoute('front_my_teams');
        }

        $decision = strtoupper(trim((string) $request->request->get('decision', '')));
        if (!in_array($decision, ['ACCEPTED', 'REFUSED'], true)) {
            $this->addFlash('error', 'Decision invalide.');
            return $this->redirectToRoute('front_my_teams');
        }

        $invite
            ->setStatus($decision)
            ->setRespondedAt(new \DateTime());

        if ($decision === 'ACCEPTED') {
            $team = $invite->getTeamId();
            if ($team !== null) {
                $teamMember = $teamMemberRepository->findOneByTeamAndUser($team, $viewer);
                if ($teamMember === null) {
                    $teamMember = (new TeamMember())
                        ->setTeamId($team)
                        ->setUserId($viewer)
                        ->setJoinedAt(new \DateTime())
                        ->setIsActive(true)
                        ->setLeftAt(null);
                    $entityManager->persist($teamMember);
                } else {
                    $teamMember
                        ->setIsActive(true)
                        ->setLeftAt(null);
                }
            }
        }

        $entityManager->flush();

        $this->addFlash('success', $decision === 'ACCEPTED' ? 'Invitation acceptee.' : 'Invitation refusee.');

        return $this->redirectToRoute('front_my_teams');
    }

    #[Route('/pages/my-teams/{teamId}/leave', name: 'front_my_teams_leave', requirements: ['teamId' => '\d+'], methods: ['POST'])]
    public function leaveTeam(
        int $teamId,
        Request $request,
        TeamMemberRepository $teamMemberRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('team_leave_' . $teamId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_my_teams');
        }

        $activeMemberships = $teamMemberRepository->findActiveByUser($viewer, 100);
        foreach ($activeMemberships as $membership) {
            $membershipTeam = $membership->getTeamId();
            if ($membershipTeam?->getTeamId() !== $teamId) {
                continue;
            }

            $membership
                ->setIsActive(false)
                ->setLeftAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Vous avez quitte l\'equipe.');

            return $this->redirectToRoute('front_my_teams');
        }

        $this->addFlash('error', 'Adhesion introuvable.');

        return $this->redirectToRoute('front_my_teams');
    }
}
