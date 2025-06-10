<?php

namespace App\Service;

use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MailerService
{
    private MailerInterface $mailer;
    private Environment $twig;
    private string $senderEmail;

    public function __construct(MailerInterface $mailer, Environment $twig, string $senderEmail)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->senderEmail = $senderEmail;
    }

    public function sendEmail(string $to, string $subject, string $template, array $context = []): bool
    {
        try {
            $htmlBody = $this->twig->render($template, $context);

            $email = (new Email())
                ->from($this->senderEmail)
                ->to($to)
                ->subject($subject)
                ->html($htmlBody);

            $this->mailer->send($email);

            return true;

        } catch (TransportExceptionInterface | LoaderError | RuntimeError | SyntaxError $e) {
            return false;
        }
    }
}