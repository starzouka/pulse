<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Form\PasswordChangeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class PasswordChangeController extends AbstractController
{
    #[Route('/pages/password-change', name: 'front_password_change', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $form = $this->createForm(PasswordChangeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = (string) $form->get('currentPassword')->getData();
            $plainPassword = (string) $form->get('plainPassword')->getData();

            if (!$passwordHasher->isPasswordValid($viewer, $currentPassword)) {
                $form->get('currentPassword')->addError(new FormError('Mot de passe actuel invalide.'));
            } elseif ($passwordHasher->isPasswordValid($viewer, $plainPassword)) {
                $form->get('plainPassword')->addError(new FormError('Le nouveau mot de passe doit etre different de l\'ancien.'));
            } else {
                $viewer
                    ->setPasswordHash($passwordHasher->hashPassword($viewer, $plainPassword))
                    ->setUpdatedAt(new \DateTime())
                ;

                $entityManager->flush();

                $this->addFlash('success', 'Mot de passe mis a jour avec succes.');

                return $this->redirectToRoute('front_profile');
            }
        }

        return $this->render('front/pages/password-change.html.twig', [
            'passwordChangeForm' => $form->createView(),
            'viewer_user' => $viewer,
        ]);
    }
}
