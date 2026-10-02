<?php

namespace App\Controller\author;

use App\Entity\Post;
use App\Form\AddPostType;
use App\Service\FormArticle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

#[Route('/author/',name: 'app_author_')]
final class PostController extends AbstractController
{
    #[Route('post/list', name: 'list')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    #[Route('post/add',name:'add_post',methods:['GET','POST'])]
    public function addPost(Request $request,FormArticle $formArticle):Response
    {
        $post = new Post();
        $form = $this->createForm(AddPostType::class,$post);
        $form->handleRequest($request);
        if($request->isMethod('POST')){
            if($form->isSubmitted()){
                return $formArticle->handleFormData($form);
            }
        }
        return $this->render('post/add/add_post.html.twig',['form'=>$form->createView()]);
    }
}
