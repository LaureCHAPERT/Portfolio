<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Services\MailerService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerService $mailer)
    {
        $form = $this->createForm(ContactType::class, [
        ]);
        $form->handleRequest($request);
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/sendEmail', name: 'sendEmail', methods: ['POST'])]
    public function sendEmail(Request $request, MailerService $mailer, LoggerInterface $logger): JsonResponse
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return new JsonResponse(['success' => false], Response::HTTP_BAD_REQUEST);
        }

        $data = $form->getData();

        try {
            $mailer->sendContactMessage($data['fullName'], $data['email'], $data['message']);
            return new JsonResponse(['success' => true]);
        } catch (\Throwable $e) {
            // Le détail (qui peut contenir le DSN et donc des identifiants) va uniquement dans les logs,
            // jamais dans la réponse envoyée au visiteur.
            $logger->error("Échec de l'envoi du formulaire de contact", ['exception' => $e]);

            return new JsonResponse(['success' => false], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}