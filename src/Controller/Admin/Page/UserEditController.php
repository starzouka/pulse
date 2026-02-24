<?php

namespace App\Controller\Admin\Page;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class UserEditController extends AbstractController
{
    #[Route('/admin/user-edit/{id}', name: 'admin_user_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function index(
        int $id,
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $userRepository->find($id);
        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $form = $this->createForm(UserType::class, $user, [
            'password_required' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = trim((string) $form->get('plainPassword')->getData());
            if ($plainPassword !== '') {
                $user->setPasswordHash($passwordHasher->hashPassword($user, $plainPassword));
            }

            $user->setUpdatedAt(new \DateTime());

            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur mis a jour.');

            return $this->redirectToRoute('admin_user_detail', [
                'id' => $id,
            ]);
        }

        return $this->render('admin/pages/user-edit.html.twig', [
            'userForm' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/user-edit', name: 'admin_user_edit_legacy', methods: ['GET'])]
    public function legacy(Request $request): Response
    {
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            return $this->redirectToRoute('admin_user_edit', ['id' => $id]);
        }

        return $this->redirectToRoute('admin_users');
    }
}
