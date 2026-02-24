<?php

namespace App\Controller\Admin\Page;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class UserCreateController extends AbstractController
{
    #[Route('/admin/user-create', name: 'admin_user_create', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = new User();
        $user->setRole(User::DOMAIN_ROLE_PLAYER);
        $user->setGender('UNKNOWN');

        $form = $this->createForm(UserType::class, $user, [
            'password_required' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = (string) $form->get('plainPassword')->getData();
            $user->setPasswordHash($passwordHasher->hashPassword($user, $plainPassword));

            $now = new \DateTime();
            $user->setCreatedAt($now);
            $user->setUpdatedAt($now);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur cree avec succes.');

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/pages/user-create.html.twig', [
            'userForm' => $form->createView(),
        ]);
    }

    #[Route('/admin/add-user', name: 'admin_add_user', methods: ['GET'])]
    public function legacyRoute(): Response
    {
        return $this->redirectToRoute('admin_user_create');
    }
}
