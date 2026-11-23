<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailerService
{
    private const OWNER_EMAIL = 'laure.chapert@gmail.com';

    public function __construct(
        private readonly MailerInterface $mailer
    ) {
    }

    /**
     * Envoie le message du formulaire de contact à la propriétaire du site.
     * Le visiteur est placé en Reply-To pour pouvoir lui répondre directement.
     */
    public function sendContactMessage(string $fullName, string $visitorEmail, string $message): void
    {
        $email = (new Email())
            ->from('noreply@portfolio.com')
            ->to(self::OWNER_EMAIL)
            ->replyTo(new Address($visitorEmail, $fullName))
            ->subject('Demande de contact sur votre site de ' . $visitorEmail)
            ->text($fullName . ' vous a envoyé le message suivant :' . "\n\n" . $message);

        $this->mailer->send($email);
    }
}
