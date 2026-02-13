<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\Profile\ProfilePageDataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlayerProfileController extends AbstractController
{
    #[Route('/pages/player-profile/{id}', name: 'front_player_profile', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        UserRepository $userRepository,
        ProfilePageDataProvider $profilePageDataProvider,
    ): Response
    {
        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;

        $targetUser = null;
        if ($id !== null) {
            $targetUser = $userRepository->find($id);
        }

        if (!$targetUser instanceof User) {
            $queryBuilder = $userRepository->createQueryBuilder('user');
            if ($viewerUser instanceof User && $viewerUser->getUserId() !== null) {
                $queryBuilder
                    ->andWhere('user.userId != :viewerId')
                    ->setParameter('viewerId', $viewerUser->getUserId())
                ;
            }

            $targetUser = $queryBuilder
                ->orderBy('user.userId', 'ASC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }

        if (!$targetUser instanceof User) {
            throw $this->createNotFoundException('Aucun profil disponible.');
        }

        if ($viewerUser instanceof User && $viewerUser->getUserId() === $targetUser->getUserId()) {
            return $this->redirectToRoute('front_profile');
        }

        $profileData = $profilePageDataProvider->build($targetUser, $viewerUser, $this->extractProfileFilters($request));

        return $this->render('front/pages/profile.html.twig', [
            'profile_user' => $targetUser,
            'viewer_user' => $viewerUser,
            'active_tab' => $this->sanitizeTab($request->query->get('tab')),
            ...$profileData,
        ]);
    }

    private function sanitizeTab(mixed $tab): string
    {
        $allowedTabs = ['posts', 'about', 'friends', 'teams'];
        $tabAsString = is_string($tab) ? $tab : 'posts';

        return in_array($tabAsString, $allowedTabs, true) ? $tabAsString : 'posts';
    }

    /**
     * @return array{
     *   posts_q:string,
     *   posts_visibility:string,
     *   posts_sort:string,
     *   friends_q:string,
     *   friends_sort:string,
     *   teams_q:string,
     *   teams_region:string,
     *   teams_sort:string
     * }
     */
    private function extractProfileFilters(Request $request): array
    {
        $postsVisibility = strtoupper(trim((string) $request->query->get('posts_visibility', '')));
        if (!in_array($postsVisibility, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $postsVisibility = '';
        }

        $postsSort = strtolower(trim((string) $request->query->get('posts_sort', 'latest')));
        if (!in_array($postsSort, ['latest', 'oldest', 'liked', 'commented'], true)) {
            $postsSort = 'latest';
        }

        $friendsSort = strtolower(trim((string) $request->query->get('friends_sort', 'recent')));
        if (!in_array($friendsSort, ['recent', 'oldest', 'name'], true)) {
            $friendsSort = 'recent';
        }

        $teamsSort = strtolower(trim((string) $request->query->get('teams_sort', 'latest')));
        if (!in_array($teamsSort, ['latest', 'oldest', 'name', 'region'], true)) {
            $teamsSort = 'latest';
        }

        return [
            'posts_q' => trim((string) $request->query->get('posts_q', '')),
            'posts_visibility' => $postsVisibility,
            'posts_sort' => $postsSort,
            'friends_q' => trim((string) $request->query->get('friends_q', '')),
            'friends_sort' => $friendsSort,
            'teams_q' => trim((string) $request->query->get('teams_q', '')),
            'teams_region' => trim((string) $request->query->get('teams_region', '')),
            'teams_sort' => $teamsSort,
        ];
    }
}
