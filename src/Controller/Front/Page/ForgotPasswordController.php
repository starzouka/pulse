<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Form\ForgotPasswordRequestType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class ForgotPasswordController extends AbstractController
{
    #[Route('/pages/forgot-password', name: 'front_forgot_password', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        UrlGeneratorInterface $urlGenerator,
    ): Response
    {
        $form = $this->createForm(ForgotPasswordRequestType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = strtolower(trim((string) $form->get('email')->getData()));
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user === null) {
                $this->addFlash('error', "Cet email n'existe pas.");
                return $this->redirectToRoute('front_forgot_password');
            }

            $token = bin2hex(random_bytes(32));
            $tokenHash = hash('sha256', $token);
            $expiresAt = new \DateTime('+1 hour');

            $user
                ->setResetPasswordTokenHash($tokenHash)
                ->setResetPasswordExpiresAt($expiresAt)
                ->setUpdatedAt(new \DateTime())
            ;

            $entityManager->persist($user);
            $entityManager->flush();

            $mailerDsn = (string) ($_ENV['MAILER_DSN'] ?? $_SERVER['MAILER_DSN'] ?? getenv('MAILER_DSN') ?: '');
            if ($mailerDsn === '' || str_starts_with($mailerDsn, 'null://')) {
                $this->addFlash('error', "Impossible d'envoyer l'email: MAILER_DSN est non configure.");
                return $this->redirectToRoute('front_forgot_password');
            }

            $resetUrl = $urlGenerator->generate('front_reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
            $mailerFrom = $_ENV['MAILER_FROM_ADDRESS'] ?? $_SERVER['MAILER_FROM_ADDRESS'] ?? 'no-reply@pulse.local';

            try {
                $mailer->send(
                    (new TemplatedEmail())
                        ->from(new Address((string) $mailerFrom, 'PULSE'))
                        ->to($email)
                        ->subject('Reinitialisation de votre mot de passe')
                        ->htmlTemplate('emails/reset_password_email.html.twig')
                        ->context([
                            'resetUrl' => $resetUrl,
                            'expiresAt' => $expiresAt,
                        ])
                );
                $this->addFlash('success', 'Un email de reinitialisation vous a ete envoye.');
            } catch (\Throwable) {
                $this->addFlash('error', "L'email n'a pas pu etre envoye. Reessayez plus tard.");
            }

            return $this->redirectToRoute('front_forgot_password');
        }

        return $this->render('front/pages/forgot-password.html.twig', [
            'forgotPasswordForm' => $form->createView(),
        ]);
    }
}
