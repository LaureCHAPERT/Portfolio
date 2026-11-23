<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailerService
{
    /**
     * @param string $fromAddress Expéditeur : doit être une adresse autorisée par le serveur SMTP
     *                            (chez Hostinger, l'adresse du compte utilisé dans MAILER_DSN)
     * @param string $ownerAddress Destinataire des messages du formulaire de contact
     */
    public function __construct(
        private readonly MailerInterface $mailer,
        #[Autowire(env: 'MAILER_FROM')]
        private readonly string $fromAddress,
        #[Autowire(env: 'MAILER_TO')]
        private readonly string $ownerAddress,
    ) {
    }

    /**
     * Envoie le message du formulaire de contact à la propriétaire du site.
     * Le visiteur est placé en Reply-To pour pouvoir lui répondre directement.
     */
    public function sendContactMessage(string $fullName, string $visitorEmail, string $message): void
    {
        $email = (new Email())
            ->from(new Address($this->fromAddress, 'Portfolio Laure Chapert'))
            ->to($this->ownerAddress)
            ->replyTo(new Address($visitorEmail, $fullName))
            ->subject('Demande de contact sur votre site de ' . $visitorEmail)
            ->text($fullName . ' vous a envoyé le message suivant :' . "\n\n" . $message);

        $this->mailer->send($email);
    }
}
