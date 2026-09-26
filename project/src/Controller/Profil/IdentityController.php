<?php

namespace App\Controller\Profil;


use App\Form\IdentityType;
use App\Form\VerifyNumberType;
use App\Repository\IdentityRepository;
use App\Repository\UserRepository;
use App\Service\FormService;
use App\Service\IntraController;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile/',name: 'profile_')]
final class IdentityController extends AbstractController
{
    /**
     * @param RequestStack $requestStack
     * @param IdentityRepository $identityRepository
     * @param FormService $formService
     * @param SessionInterface $session
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     * @throws Exception
     */
    #[Route('identity/register', name: 'app_identity',methods: ['GET','POST'])]
    public function index(RequestStack $requestStack,IdentityRepository $identityRepository,FormService $formService,
                          SessionInterface $session ): Response
    {
        if(!$this->getUser()){
            return $this->redirectToRoute('app_login');
        }

        $request =$requestStack->getMainRequest();
        $form = $this->createForm(IdentityType::class,$identityRepository->findByGender());
        $form->handleRequest($request);
        if($request->isMethod('POST')){
            if($form->isSubmitted()){
                $user = $this->getUser();
                return $formService->handleFormData($form,$user,$session);
            }
        }
        return $this->render('identity/index.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param UserRepository $userRepository
     * @param IntraController $intraController
     * @param MessageBusInterface $messageBus
     * @param EntityManagerInterface $em
     * @return Response
     * @throws ExceptionInterface
     */
    #[Route('register/verified',name: 'app_register_verified')]
    public function verifiedDevice(UserRepository $userRepository,IntraController $intraController , MessageBusInterface $messageBus, EntityManagerInterface $em
    ):Response
    {
        if($this->getUser() ) {
            $user = $userRepository->find($this->getUser());
            $number = mt_rand(100001, 999999);
            $user->setResetNumber($number);
            $intraController->emailSimple($user, $messageBus, ['user' => $user, 'number' => $number]);
            $em->flush();
        }
        return $this->redirectToRoute('profile_app_verified_user');
    }

    /**
     * @param EntityManagerInterface $em
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     */
    #[Route('register/user',name: 'app_verified_user',methods: ['GET','POST'])]
    public function verifiedUser(EntityManagerInterface $em,Request $request,SessionInterface $session):Response
    {
        $now = new DateTimeImmutable();
        $timer = $now->getTimestamp();
        // dd($session->getMetadataBag()->getCreated());
        $user = $this->getUser();
        $form = $this->createForm(VerifyNumberType::class,$user);
        $form->handleRequest($request);
        if($request->isMethod('POST')) {
            if ($form->isSubmitted() && $form->isValid()) {
                $number = $form->get('number')->getData();
                $timeValid = $session->getMetadataBag()->getCreated() + 900;
                //   dd($timer. ' ' .$validity);
                if ($number === $user->getResetNumber() && $timer <= $timeValid) {
                    $user->setResetNumber(null);
                    $user->setSession($session->getId());
                    $em->flush();
                    return $this->redirectToRoute('app_main');
                }elseif ($number !== $user->getResetNumber() || $timer > $timeValid){
                    $this->addFlash('warning','Vous êtes déconnecté.');
                    return $this->redirectToRoute('app_logout');
                }
            }
        }
        return $this->render('identity/verified-device.html.twig',['form'=>$form->createView()]);
    }
}
