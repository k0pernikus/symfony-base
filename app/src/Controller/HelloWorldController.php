<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController
{
    #[Route('/')]
    public function sayHelloWorld(): Response
    {
        return new Response(
            '<html><body>HELLO WORLD</html>'
        );
    }

    #[Route('/status')]
    public function sayOK(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}