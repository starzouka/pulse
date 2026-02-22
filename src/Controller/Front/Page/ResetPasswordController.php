<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class ResetPasswordController extends AbstractController
{
    #[Route('/pages/reset-password', name: 'front_reset_password', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $token = trim((string) ($request->query->get('token') ?? $request->request->get('token') ?? ''));
        if ($token === '') {
            $this->addFlash('error', 'Lien de reinitialisation invalide.');
            return $this->redirectToRoute('front_forgot_password');
        }

        $tokenHash = hash('sha256', $token);
        $user = $userRepository->findOneByValidResetPasswordTokenHash($tokenHash, new \DateTime());
        if ($user === null) {
            $this->addFlash('error', 'Lien invalide ou expire.');
            return $this->redirectToRoute('front_forgot_password');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = (string) $form->get('plainPassword')->getData();

            $user
                ->setPassword($passwordHasher->hashPassword($user, $plainPassword))
                ->setResetPasswordTokenHash(null)
                ->setResetPasswordExpiresAt(null)
                ->setUpdatedAt(new \DateTime())
            ;

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre mot de passe a ete reinitialise. Vous pouvez vous connecter.');

            return $this->redirectToRoute('front_login');
        }

        return $this->render('front/pages/reset-password.html.twig', [
            'resetPasswordForm' => $form->createView(),
            'token' => $token,
        ]);
    }
}
