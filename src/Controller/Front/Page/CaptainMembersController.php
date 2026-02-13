<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use App\Service\Captain\CaptainTeamContextProvider;
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

        return $this->render('front/pages/captain-members.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'active_members' => $activeMembers,
            'inactive_members' => $inactiveMembers,
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

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }
}

