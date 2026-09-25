<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

readonly class MaintenanceListener
{

   public function __construct(
       private string      $maintenance,
       private Environment $twig
   ){}

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function onKernelRequest(RequestEvent $event):void
        {
            if(!file_exists($this->maintenance))return;


            $event->setResponse(
                new Response(
                    $this->twig->render('maintenance/maintenance.html.twig'),
                    Response::HTTP_SERVICE_UNAVAILABLE
                )
            );
            $event->stopPropagation();
        }
}
