<?php

namespace App\Service;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

readonly class FormArticle
{
    public function __construct(
        private EntityManagerInterface $em,
        private Environment $environment

    ){}

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function handleFormData(FormInterface $form):JsonResponse
    {
        if($form->isValid()){
            return $this->handleValidForm($form);
        }else{
            return $this->handleInvalideForm($form);
        }

    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function handleValidForm(FormInterface $form):JsonResponse
    {
        $post = $form->getData();
        $post->setTitle($form->get('title')->getData());
        $post->setContent($form->get('content')->getData());
        $this->em->persist($post);
        $this->em->flush();

        return new JsonResponse([
            'code'=>Post::FORM_ADD_SUCCESSFULLY,
            'html'=>$this->environment->render('_components/_post_done.html.twig',['post'=>$post])
        ]);
    }
    public function handleInvalideForm(FormInterface $form):JsonResponse
    {
        return new JsonResponse([
            'code'=>Post::FORM_BAD_RESPONSE,
            'errors'=>$this->getErrorMessages($form)
        ]);
    }
    private function getErrorMessages(FormInterface $form):array
    {
        $errors = [];
        foreach ($form->getErrors() as $error){
            $errors[]= $error->getMessage();
        }
        foreach ($form->all() as $child){
            if(!$child->isValid()){
                $errors[$child->getName()]= $this->getErrorMessages($child);
            }
        }
        return $errors;
    }

}
