<?php

namespace App\MessageHandler;

use App\Message\SendActivationMessage;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class SendActivationMessageHandler
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public function __invoke(SendActivationMessage $message): void
    {
        $email = (new TemplatedEmail())
            ->from($message->getFrom())
            ->to($message->getTo())
            ->subject($message->getSubject())
            ->htmlTemplate('email/' . $message->getTemplate() . '.html.twig')
            ->context($message->getContext());

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface ) {
                return;
        }
    }
}
