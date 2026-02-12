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

        $profileData = $profilePageDataProvider->build($targetUser, $viewerUser);

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
}
