<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
    public function sendEmail(Request $request, MailerService $mailer): JsonResponse
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return new JsonResponse(['success' => false, 'message' => 'Invalid form'], Response::HTTP_BAD_REQUEST);
        }

        $data = $form->getData();

        try {
            $mailer->sendContactMessage($data['fullName'], $data['email'], $data['message']);
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}