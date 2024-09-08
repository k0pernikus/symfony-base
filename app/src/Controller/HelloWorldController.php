<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/')]
    public function sayHelloWorld(): Response
    {
        return $this->render('hello_world.html.twig');
    }

    #[Route('/status')]
    public function sayOK(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}