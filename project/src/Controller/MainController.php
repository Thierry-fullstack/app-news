<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\IntraController;
use App\Service\JwtService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    /**
     * @throws ExceptionInterface
     */
    #[Route('/', name: 'app_main')]
    public function index(Session $session,IntraController $intraController,JwtService $jwtService,MessageBusInterface $messageBus): Response
    {
        if($this->getUser()) {
            if($this->getUser()->getStatus()===User::INSCRIT){
                $this->addFlash('warning','Veuillez consulter votre boite mail pour activer votre compte !');
                $intraController->emailValidate($this->getUser(),$jwtService,$messageBus,IntraController::CHECk_USER,$intraController::SUBJECT,IntraController::REGISTER);
            }
            if($this->getUser()->getStatus()===User::CONFIRM){
                $this->addFlash('warning','Votre compte est maintenant activé, finalisez votre inscription');
                return $this->redirectToRoute('profile_app_identity');
            }
            if($this->getUser()->getStatus()===User::COMPLET){
                $sessionId = $session->getId();
                if($sessionId !== $this->getUser()->getSession()){
                    return $this->redirectToRoute('profile_app_register_verified');
                }
            }
        }
        return $this->render('main/index.html.twig');
    }

}
