<?php

namespace App\Controller;

use App\Form\ResetPasswordRequestType;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use App\Service\IntraController;
use App\Service\JwtService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('app_main');
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['error' => $error]);
        //return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route('/forget-password', name:'app_forgotten_password',methods: ['GET','POST'])]
    public function forgottenPassword(Request $request,UserRepository $userRepository,EntityManagerInterface $entityManager,IntraController $intraController,
    JwtService $jwtService,MessageBusInterface $messageBus):Response
    {
        $form = $this->createForm(ResetPasswordRequestType::class);
        $form->handleRequest($request);
        if($request->isMethod('POST')){
            if($form->isSubmitted() && $form->isValid()){
                $user = $userRepository->findOneBy(['email'=>$form->get('email')->getData()]);
                if($user){
                    $header = ['typ' => 'JWT', 'alg' => 'HS256'];
                    $payload = ['user_id' => $user->getId()];
                    $token = $jwtService->generate($header, $payload, $this->getParameter('app.jwtsecret'));
                    $user->setResetToken($token);
                    try {
                        $entityManager->flush();
                        $intraController->passwordValidate($user, $token, $messageBus, IntraController::RESET_PASSWORD, IntraController::SUJET, IntraController::PASSWORD);
                        $this->addFlash('warning', 'Email envoyé avec succès');
                        return $this->redirectToRoute('app_logout');
                    }catch (EntityNotFoundException $e){
                        return $this->render('bundles/Exception/error.html.twig',['exception'=>$e->getMessage()]);
                    }
                }else{
                    $this->addFlash('warning','Un problème est survenu');
                    return $this->redirectToRoute('app_login');
                }
            }
        }
        return $this->render('security/reset_password_request.html.twig', [
            'requestPassForm' => $form->createView()
        ]);
    }

    #[Route('/change-password/{token}', name:'app_reset_password',methods: ['GET','POST'])]
    public function resetPassword(
        string $token,
        JwtService $jwtService,
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {

        if($jwtService->isValid($token) && !$jwtService->isExpired($token) && $jwtService->check($token, $this->getParameter('app.jwtsecret'))) {
            $payload = $jwtService->getPayload($token);
            $user = $userRepository->find($payload['user_id']);
            if ($user) {
                $form = $this->createForm(ResetPasswordType::class);
                $form->handleRequest($request);
                if ($request->isMethod('POST')) {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $user->setResetToken(null);
                        $user->setPassword(
                            $passwordHasher->hashPassword(
                                $user,
                                $form->get('plainPassword')->getData()
                            )
                        );
                        try {
                            $entityManager->flush();
                            $this->addFlash('success', 'Mot de passe changé avec succès');
                            return $this->redirectToRoute('app_login');
                        }catch (EntityNotFoundException $e){
                            return $this->render('bundles/Exception/error.html.twig',['exception'=>$e->getMessage()]);
                        }
                    }
                }
                return $this->render('security/reset_password.html.twig', [
                    'resetForm' => $form->createView()
                ]);
            }
        }
        $this->addFlash('danger', 'Jeton invalide');
        return $this->redirectToRoute('app_login');
    }
}






















