<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{
    #[Route('/admin/messages', name: 'admin_messages', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        MessageRepository $messageRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingMessage = $editId > 0 ? $messageRepository->find($editId) : null;
        if ($editId > 0 && !$editingMessage instanceof Message) {
            $this->addFlash('error', 'Message introuvable pour edition.');

            return $this->redirectToRoute('admin_messages');
        }

        $message = $editingMessage instanceof Message ? $editingMessage : new Message();
        $form = $this->createForm(MessageType::class, $message, [
            'include_flags' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $isEdit = $editingMessage instanceof Message;
            $now = new \DateTime();

            if (!$isEdit) {
                $message->setCreatedAt($now);
                $entityManager->persist($message);
            }

            if ($message->isRead()) {
                if ($message->getReadAt() === null) {
                    $message->setReadAt($now);
                }
            } else {
                $message->setReadAt(null);
            }

            $entityManager->flush();

            $this->addFlash('success', $isEdit ? 'Message mis a jour.' : 'Message cree.');

            return $this->redirectToRoute('admin_messages');
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'sender' => trim((string) $request->query->get('sender', '')),
            'receiver' => trim((string) $request->query->get('receiver', '')),
            'is_read' => trim((string) $request->query->get('is_read', '')),
        ];

        $messages = $messageRepository->searchForAdmin(
            $filters['q'],
            $filters['sender'],
            $filters['receiver'],
            $this->parseBooleanFilter($filters['is_read']),
            500
        );

        return $this->render('admin/pages/messages.html.twig', [
            'messages' => $messages,
            'messageForm' => $form->createView(),
            'editingMessage' => $editingMessage,
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/messages/{id}/delete', name: 'admin_message_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        MessageRepository $messageRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_message_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_messages');
        }

        $message = $messageRepository->find($id);
        if (!$message instanceof Message) {
            $this->addFlash('error', 'Message introuvable.');

            return $this->redirectToRoute('admin_messages');
        }

        $entityManager->remove($message);
        $entityManager->flush();

        $this->addFlash('success', 'Message supprime.');

        return $this->redirectToRoute('admin_messages');
    }

    #[Route('/admin/messages/export/{format}', name: 'admin_messages_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        MessageRepository $messageRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'sender' => trim((string) $request->query->get('sender', '')),
            'receiver' => trim((string) $request->query->get('receiver', '')),
            'is_read' => trim((string) $request->query->get('is_read', '')),
        ];

        $messages = $messageRepository->searchForAdmin(
            $filters['q'],
            $filters['sender'],
            $filters['receiver'],
            $this->parseBooleanFilter($filters['is_read']),
            5000
        );

        $headers = ['ID', 'Sender', 'Receiver', 'Message', 'Read', 'Created at'];
        $rows = [];
        foreach ($messages as $message) {
            $rows[] = [
                (int) ($message->getMessageId() ?? 0),
                (string) ($message->getSenderUserId()?->getUsername() ?? '-'),
                (string) ($message->getReceiverUserId()?->getUsername() ?? '-'),
                mb_substr(trim((string) $message->getBodyText()), 0, 120),
                $message->isRead() ? 'Oui' : 'Non',
                $message->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Messages', $headers, $rows, sprintf('admin_messages_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Messages', $headers, $rows, sprintf('admin_messages_%s.pdf', $fileSuffix));
    }

    private function parseBooleanFilter(string $value): ?bool
    {
        $normalized = strtolower(trim($value));
        if ($normalized === '') {
            return null;
        }

        if (in_array($normalized, ['1', 'true', 'yes', 'oui'], true)) {
            return true;
        }

        if (in_array($normalized, ['0', 'false', 'no', 'non'], true)) {
            return false;
        }

        return null;
    }
}