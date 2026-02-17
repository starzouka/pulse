<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamJoinRequest;
use App\Entity\TeamMember;
use App\Entity\User;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Repository\TeamJoinRequestRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\TeamRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamDetailController extends AbstractController
{
    #[Route('/pages/team-detail/{id}', name: 'front_team_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        TeamJoinRequestRepository $teamJoinRequestRepository,
    ): Response {
        $queryId = $request->query->getInt('id', 0);
        if ($id === null && $queryId > 0) {
            $id = $queryId;
        }

        $team = $this->resolveTeam($id, $teamRepository);
        if (!$team instanceof Team) {
            throw $this->createNotFoundException('Equipe introuvable.');
        }

        $activeTab = strtolower(trim((string) $request->query->get('tab', 'tournaments')));
        if (!in_array($activeTab, ['tournaments', 'members', 'products'], true)) {
            $activeTab = 'tournaments';
        }

        $tournamentsQuery = trim((string) $request->query->get('t_q', ''));
        $tournamentsStatus = strtoupper(trim((string) $request->query->get('t_status', '')));
        if (!in_array($tournamentsStatus, ['', 'PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'], true)) {
            $tournamentsStatus = '';
        }

        $tournamentsSort = strtolower(trim((string) $request->query->get('t_sort', 'latest')));
        if (!in_array($tournamentsSort, ['latest', 'oldest', 'title', 'status'], true)) {
            $tournamentsSort = 'latest';
        }

        $membersQuery = trim((string) $request->query->get('m_q', ''));
        $membersRole = strtoupper(trim((string) $request->query->get('m_role', '')));
        if (!in_array($membersRole, ['', 'PLAYER', 'CAPTAIN', 'ORGANIZER', 'ADMIN'], true)) {
            $membersRole = '';
        }

        $membersActiveOnly = (string) $request->query->get('m_active', '1') !== '0';
        $membersSort = strtolower(trim((string) $request->query->get('m_sort', 'joined_oldest')));
        if (!in_array($membersSort, ['joined_oldest', 'joined_latest', 'name', 'role'], true)) {
            $membersSort = 'joined_oldest';
        }

        $productsQuery = trim((string) $request->query->get('p_q', ''));
        $productsInStockOnly = $request->query->getBoolean('p_stock');
        $productsSort = strtolower(trim((string) $request->query->get('p_sort', 'latest')));
        if (!in_array($productsSort, ['latest', 'oldest', 'name', 'price_high', 'price_low', 'stock_high'], true)) {
            $productsSort = 'latest';
        }

        $teamTournaments = $tournamentTeamRepository->findByTeamWithFilters(
            $team,
            $tournamentsQuery !== '' ? $tournamentsQuery : null,
            $tournamentsStatus !== '' ? $tournamentsStatus : null,
            $tournamentsSort,
            250
        );
        $teamMembers = $teamMemberRepository->findByTeamWithFilters(
            $team,
            $membersQuery !== '' ? $membersQuery : null,
            $membersRole !== '' ? $membersRole : null,
            $membersActiveOnly,
            $membersSort,
            250
        );
        $teamProducts = $productRepository->findByTeamWithFilters(
            $team,
            $productsQuery,
            false,
            250,
            $productsSort,
            $productsInStockOnly
        );

        $teamProductsPrimaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($teamProducts);

        $activeMembersCount = $teamMemberRepository->count([
            'teamId' => $team,
            'isActive' => true,
            'leftAt' => null,
        ]);
        $activeProductsCount = $productRepository->count([
            'teamId' => $team,
            'isActive' => true,
        ]);
        $activeTournamentsCount = $tournamentTeamRepository->count([
            'teamId' => $team,
            'status' => 'ACCEPTED',
        ]);

        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;
        $joinState = $this->resolveJoinState($team, $viewerUser, $teamMemberRepository, $teamJoinRequestRepository);

        return $this->render('front/pages/team-detail.html.twig', [
            'team' => $team,
            'team_tournaments' => $teamTournaments,
            'team_members' => $teamMembers,
            'team_products' => $teamProducts,
            'team_products_primary_images_by_product_id' => $teamProductsPrimaryImagesByProductId,
            'active_tab' => $activeTab,
            'stats' => [
                'members' => $activeMembersCount,
                'products' => $activeProductsCount,
                'tournaments' => $activeTournamentsCount,
            ],
            'viewer_user' => $viewerUser,
            'join_state' => $joinState,
            'filters' => [
                't_q' => $tournamentsQuery,
                't_status' => $tournamentsStatus,
                't_sort' => $tournamentsSort,
                'm_q' => $membersQuery,
                'm_role' => $membersRole,
                'm_active' => $membersActiveOnly,
                'm_sort' => $membersSort,
                'p_q' => $productsQuery,
                'p_stock' => $productsInStockOnly,
                'p_sort' => $productsSort,
            ],
        ]);
    }

    #[Route('/pages/team-detail/{id}/join', name: 'front_team_detail_join', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function join(
        int $id,
        Request $request,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        TeamJoinRequestRepository $teamJoinRequestRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $this->generateUrl('front_team_detail', ['id' => $id]),
            ]);
        }

        if (!$this->isCsrfTokenValid('team_join_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_team_detail', ['id' => $id, 'tab' => 'members']);
        }

        $team = $teamRepository->findOneWithRelationsById($id);
        if (!$team instanceof Team) {
            throw $this->createNotFoundException('Equipe introuvable.');
        }

        if ($team->getCaptainUserId()?->getUserId() === $viewer->getUserId()) {
            $this->addFlash('info', 'Vous etes deja capitaine de cette equipe.');
            return $this->redirectToRoute('front_team_detail', ['id' => $id, 'tab' => 'members']);
        }

        $membership = $teamMemberRepository->findOneByTeamAndUser($team, $viewer);
        if ($membership instanceof TeamMember && $membership->isActive() === true && $membership->getLeftAt() === null) {
            $this->addFlash('info', 'Vous etes deja membre de cette equipe.');
            return $this->redirectToRoute('front_team_detail', ['id' => $id, 'tab' => 'members']);
        }

        $pendingRequest = $teamJoinRequestRepository->findOnePendingByTeamAndUser($team, $viewer);
        if ($pendingRequest instanceof TeamJoinRequest) {
            $this->addFlash('info', 'Une demande est deja en attente pour cette equipe.');
            return $this->redirectToRoute('front_team_detail', ['id' => $id, 'tab' => 'members']);
        }

        $note = trim((string) $request->request->get('note', ''));
        if ($note === '') {
            $note = null;
        }

        $joinRequest = (new TeamJoinRequest())
            ->setTeamId($team)
            ->setUserId($viewer)
            ->setStatus('PENDING')
            ->setNote($note)
            ->setCreatedAt(new \DateTime())
            ->setRespondedAt(null)
            ->setRespondedByCaptainId(null);

        $entityManager->persist($joinRequest);
        $entityManager->flush();

        $this->addFlash('success', 'Votre demande pour rejoindre cette equipe a ete envoyee.');

        return $this->redirectToRoute('front_team_detail', ['id' => $id, 'tab' => 'members']);
    }

    private function resolveTeam(?int $id, TeamRepository $teamRepository): ?Team
    {
        if ($id !== null) {
            return $teamRepository->findOneWithRelationsById($id);
        }

        $teams = $teamRepository->searchCatalog(
            query: null,
            region: null,
            hasProducts: false,
            activeInTournaments: false,
            sort: 'latest',
            limit: 1
        );

        return $teams[0] ?? null;
    }

    /**
     * @return array{code:string,message:string}
     */
    private function resolveJoinState(
        Team $team,
        ?User $viewerUser,
        TeamMemberRepository $teamMemberRepository,
        TeamJoinRequestRepository $teamJoinRequestRepository
    ): array {
        if (!$viewerUser instanceof User) {
            return [
                'code' => 'guest',
                'message' => 'Connectez-vous pour demander a rejoindre cette equipe.',
            ];
        }

        if ($team->getCaptainUserId()?->getUserId() === $viewerUser->getUserId()) {
            return [
                'code' => 'captain',
                'message' => 'Vous etes capitaine de cette equipe.',
            ];
        }

        $membership = $teamMemberRepository->findOneByTeamAndUser($team, $viewerUser);
        if ($membership instanceof TeamMember && $membership->isActive() === true && $membership->getLeftAt() === null) {
            return [
                'code' => 'member',
                'message' => 'Vous etes deja membre de cette equipe.',
            ];
        }

        $pendingRequest = $teamJoinRequestRepository->findOnePendingByTeamAndUser($team, $viewerUser);
        if ($pendingRequest instanceof TeamJoinRequest) {
            return [
                'code' => 'pending',
                'message' => 'Votre demande est en attente de validation.',
            ];
        }

        return [
            'code' => 'can_join',
            'message' => 'Vous pouvez envoyer une demande au capitaine.',
        ];
    }
}
