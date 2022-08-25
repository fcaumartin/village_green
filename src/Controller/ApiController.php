<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/api1', name: 'api1')]
    public function api1(Request $request): Response
    {
        $response = json_decode($request->getContent(), true);

        return $this->json($response, 200, [
            "Access-Control-Allow-Origin" => "*",
            "Access-Control-Allow-Headers" => "Content-type"
        ]);
    }
}
