<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;

readonly class MailService
{
    private MailerInterface $mailer;

    public function __construct( MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param string $from
     * @param string $to
     * @param string $subject
     * @param string $template
     * @param array $context
     * @return void
     */
    public function sendMail(string $from, string $to, string $subject, string $template, array $context): void
    {
        $email = (new TemplatedEmail())
            ->from($from)
            ->to($to)
            ->subject($subject)
            ->htmlTemplate("email/" . $template. ".html.twig")
            ->context($context);
        try {
            $this->mailer->send($email);
        }catch (TransportExceptionInterface){}
    }

}
