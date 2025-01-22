<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RGLController
{
    #[Route('/api/rgl', name: 'api_rgl')]
    public function index(): Response
    {
        return new Response('Symfony de Rocio Gavira Lucena Responde a la llamada de React');
    }
}
