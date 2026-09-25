<?php

namespace App\Service;

use App\Entity\User;
use App\Message\SendActivationMessage;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IntraController extends AbstractController
{
    private const string WEBMASTER = 'webmaster@my-domain.org';
    private const string CHECK_YOUR_IDENTITY = 'check your identity';  // subject
    private const string VERIFICATION = 'verification'; // template
    /**
     *
     */
    public const string SUBJECT = 'Activation de votre compte'; // subject
    public const string CHECk_USER = 'check_user'; // method
    public const string REGISTER = 'register'; // template


    /**
     * email validation function
     *
     * @param User $user
     * @param JwtService $jwt
     * @param MessageBusInterface $messageBus
     * @param $destination
     * @param $subject
     * @param $nomTemplate
     * @return void
     * @throws ExceptionInterface
     */
    public function emailValidate(User $user,JwtService $jwt ,MessageBusInterface $messageBus, $destination, $subject, $nomTemplate ): void
    {
        $header = ['typ' => 'JWT', 'alg' => 'HS256'];
        $payload = ['user_id' => $user->getId()];
        $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));
        $url = $this->generateUrl($destination, ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
        $messageBus->dispatch(new SendActivationMessage( self::WEBMASTER, $user->getEmail(), $subject, $nomTemplate, ['user' => $user, 'url' => $url]));
    }


    /**
     * @param User $user
     * @param MessageBusInterface $messageBus
     * @param array $context
     * @return void
     * @throws ExceptionInterface
     */
    public function emailSimple(User $user, MessageBusInterface $messageBus, array $context):void
    {
        $messageBus->dispatch(new SendActivationMessage(self::WEBMASTER,$user->getEmail(),self::CHECK_YOUR_IDENTITY,self::VERIFICATION,$context));
    }

}
