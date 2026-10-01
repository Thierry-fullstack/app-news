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

readonly class FormServiceEdit
{


    public function __construct(
        private EntityManagerInterface $em,
        private PhotoService           $photoService,

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
        $identity->setInscrit($user);

        /** @var UploadedFile $image */
        $image = $form->get('portrait')->getData();
        if($image) {
            if ($image->getClientOriginalExtension() === 'jpeg' || $image->getClientOriginalExtension() === 'jpg') {
                $fichier = $this->photoService->add($image, uniqid(more_entropy: true), PhotoService::PHOTO_PATH, 400, 400);
                $portrait = new Portrait();
                $portrait->setName($fichier)->setAlt($identity->getPseudo())->setIdentity($identity);
                $this->em->persist($portrait);
                $identity->setPortrait($portrait);
            }
        }
        $identity->setPortrait($identity->getPortrait());
        $user->setStatus(User::COMPLET);
        $user->setSession($session->getId());
        $this->em->flush();
        return new JsonResponse([
            'code'=>Identity::FORM_ADD_SUCCESSFULLY,
        ]);
    }

    private  function handleInvalidForm(FormInterface $form,IntraController $intraController): JsonResponse
    {
        return new JsonResponse([
            'code'=>Identity::FORM_BAD_RESPONSE,
            'errors' => $intraController->getErrorMessages($form)
        ]);

    }



}
