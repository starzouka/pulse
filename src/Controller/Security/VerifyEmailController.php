<?php

declare(strict_types=1);

namespace App\Controller\Security;

use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

final class VerifyEmailController extends AbstractController
{
    #[Route('/verify/email', name: 'front_verify_email', methods: ['GET'])]
    public function verifyUserEmail(
        Request $request,
        UserRepository $userRepository,
        EmailVerifier $emailVerifier,
        TranslatorInterface $translator,
    ): Response {
        $id = $request->query->get('id');
        if ($id === null) {
            return $this->redirectToRoute('front_register');
        }

        $user = $userRepository->find($id);
        if ($user === null) {
            return $this->redirectToRoute('front_register');
        }

        try {
            $emailVerifier->handleEmailConfirmation($request, $user);
            $this->addFlash('success', 'Votre email est verifie. Vous pouvez vous connecter.');
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
            return $this->redirectToRoute('front_register');
        }

        return $this->redirectToRoute('front_login');
    }
}
