<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\TeamJoinRequestRepository;
use App\Repository\TeamMemberRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainRequestsController extends AbstractController
{
    #[Route('/pages/captain-requests', name: 'front_captain_requests', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamJoinRequestRepository $teamJoinRequestRepository,
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

        $statusFilter = strtoupper(trim((string) $request->query->get('status', '')));
        $allowedStatuses = ['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'];
        if (!in_array($statusFilter, $allowedStatuses, true)) {
            $statusFilter = '';
        }

        $requests = $teamJoinRequestRepository->findByTeamWithUser(
            $activeTeam,
            $statusFilter !== '' ? $statusFilter : null,
            150,
        );

        return $this->render('front/pages/captain-requests.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'join_requests' => $requests,
            'status_filter' => $statusFilter,
            'status_options' => $allowedStatuses,
        ]);
    }

    #[Route('/pages/captain-requests/{id}/respond', name: 'front_captain_requests_respond', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function respond(
        int $id,
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamJoinRequestRepository $teamJoinRequestRepository,
        TeamMemberRepository $teamMemberRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_join_request_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_requests');
        }

        $decision = strtoupper(trim((string) $request->request->get('decision', '')));
        if (!in_array($decision, ['ACCEPTED', 'REFUSED'], true)) {
            $this->addFlash('error', 'Decision invalide.');

            return $this->redirectToRoute('front_captain_requests');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $joinRequest = $teamJoinRequestRepository->findOnePendingByIdForTeam($id, $team);
        if ($joinRequest === null) {
            $this->addFlash('error', 'Demande introuvable ou deja traitee.');

            return $this->redirectToRoute('front_captain_requests', ['team' => $teamId]);
        }

        $joinRequest
            ->setStatus($decision)
            ->setRespondedAt(new \DateTime())
            ->setRespondedByCaptainId($viewer);

        if ($decision === 'ACCEPTED') {
            $applicant = $joinRequest->getUserId();
            if ($applicant instanceof User) {
                $membership = $teamMemberRepository->findOneByTeamAndUser($team, $applicant);
                if ($membership instanceof TeamMember) {
                    $membership
                        ->setIsActive(true)
                        ->setLeftAt(null);
                } else {
                    $entityManager->persist(
                        (new TeamMember())
                            ->setTeamId($team)
                            ->setUserId($applicant)
                            ->setJoinedAt(new \DateTime())
                            ->setIsActive(true)
                            ->setLeftAt(null),
                    );
                }
            }
        }

        $entityManager->flush();

        $this->addFlash(
            'success',
            $decision === 'ACCEPTED'
                ? "La demande a ete acceptee."
                : "La demande a ete refusee.",
        );

        return $this->redirectToRoute('front_captain_requests', ['team' => $teamId]);
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

