<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ErrorController extends AbstractController
{
    #[Route('/error/{e}', name: 'app_error')]
    public function index(Exception $e): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error'.$e->getCode(). '.html.twig',
            ['exception'=>$e]);
    }
}
