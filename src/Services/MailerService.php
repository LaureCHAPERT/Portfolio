<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
Use Symfony\Component\Mime\Email;

class MailerService
{
    public function __construct (
        private readonly MailerInterface $mailer
    ) {
    }

    public function sendEmail(
        $to = 'laure.chapert@gmail.com',
        $subject = 'Nouveau message depuis votre portfolio',
        $content = '',
    ): void{
        $email = (new Email())
            ->from('noreply@portfolio.com')
            ->to($to)
            ->subject($subject)
            ->html($content);
        $this->mailer->send($email);
    }
}