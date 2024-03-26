<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function PHPUnit\Framework\returnArgument;

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
        $response = $request->request->all();
        $fullName = $response['contact']['fullName'];
        $email = $response['contact']['email'];
        $message = $response['contact']['message'];
//        return new JsonResponse($response['contact']['fullName']);
        $subject = 'Demande de contact sur votre site de ' . $email;
        $content = $fullName . ' vous a envoyé le message suivant: ' . $message;

        try {
            $mailer->sendEmail($email, $subject, $content);
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}