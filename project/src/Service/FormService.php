<?php

namespace App\Service;

use App\Entity\Identity;
use App\Entity\Portrait;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Twig\Environment;

class FormService
{

    private const string PHOTO_PATH = 'Portraits';
    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly PhotoService $photoService,
        private readonly Environment $twig
    ){}

    /**
     * @throws Exception
     */
    public function handleFormData(FormInterface $form, User $user,SessionInterface $session): JsonResponse
    {
        if($form->isValid()){
            return $this->handleValidForm($form,$user,$session);
        }else{
            return $this->handleInvalidForm($form);
        }
    }

    /**
     * @throws Exception
     */
    private function handleValidForm(FormInterface $form, User $user,SessionInterface $session): JsonResponse
    {

        $identity = $form->getData();
        $civility = $form->get('civility')->getData();
        $identity->setCivility($civility);
        $identity->setClient($user);

        /** @var UploadedFile $image */
        $image = $form->get('portrait')->getData();
        if($image->getClientOriginalExtension()==='jpeg' || $image->getClientOriginalExtension()==='jpg'){
            $fichier = $this->photoService->add($image,uniqid(more_entropy: true),self::PHOTO_PATH,400,400);
            $portrait = new Portrait();
            $portrait->setName($fichier)->setAlt($identity->getPseudo())->setIdentity($identity);

            $this->em->persist($portrait);
        }
        $identity->setPortrait($portrait);
        $user->setPhase(2);
        $user->setSession($session->getId());
        $this->em->persist($identity);
        $this->em->flush();
        return new JsonResponse([
            'code'=>Identity::FORM_ADD_SUCCESSFULLY,
            'html'=>$this->twig->render('_components/_Indentity_done.html.twig',['identity'=>$identity->getPseudo() ])
        ]);
    }

    private  function handleInvalidForm(FormInterface $form): JsonResponse
    {
        return new JsonResponse([
            'code'=>Identity::FORM_BAD_RESPONSE,
            'errors' => $this->getErrorMessages($form)
        ]);

    }

    private function getErrorMessages(FormInterface $form):array
    {
        $errors = [];
        foreach ($form->getErrors() as $error){
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $child){
            if(!$child->isValid()){
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }
        return $errors;
    }

}
