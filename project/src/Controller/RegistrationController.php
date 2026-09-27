<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\UserAuthenticator;
use App\Service\JwtService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{

    /**
     * @throws ExceptionInterface
     */
    #[Route('/register', name: 'app_register',methods: ['GET','POST'])]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager,
    ValidatorInterface $validator,Security $security): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        if ($request->isMethod('POST')) {
        $errors = $validator->validate($request);
        if(count($errors)>0){
            return $this->render('registration/register.html.twig', [
                'registrationForm' => $form->createView(),'errors'=>$errors
            ]);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var bool $agreeTerms */
            $agreeTerms = $form->get('agreeTerms')->getData();
            $user->setIsAgree($agreeTerms);
            $user->setStatus(User::INSCRIT);
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();
            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword))->setRoles(['ROLE_USER']);
            try {
                $entityManager->persist($user);
                $entityManager->flush();
            }catch (EntityNotFoundException $e){
                return $this->render('bundles/TwigBundle/Exception/error.html.twig',['exception'=> $e->getMessage()]);
            }
            return $security->login($user, UserAuthenticator::class, 'main');
        }
    }
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView()
        ]);
    }

    /**
     * @param $token
     * @param JwtService $jwtService
     * @param UserRepository $userRepository
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route('/check/{token}',name:'check_user')]
    public function verifyUser($token, JwtService $jwtService, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        // if token valid, expired & !modified
        if($jwtService->isValid($token) && !$jwtService->isExpired($token) && $jwtService->check($token, $this->getParameter('app.jwtsecret'))){
            $payload = $jwtService->getPayload($token);
            try{
                $user = $userRepository->find($payload['user_id']);
                $user->setStatus(User::CONFIRM);
                $entityManager->flush();
                return $this->redirectToRoute('app_login');
            }catch(EntityNotFoundException $e){
                return $this->render('bundles/TwigBundle/Exception/error.html.twig',['exception'=> $e->getMessage()]);
            }
        }else {
            $this->addFlash('danger', 'Erreur ! Veuillez vous identifiez');
            return $this->redirectToRoute('app_login');
        }
    }
}
