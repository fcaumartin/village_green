<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/desktop', name: 'desktop')]
    public function desktop(): Response
    {
        return $this->render('app/desktop.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/mobile', name: 'mobile')]
    public function mobile(): Response
    {
        return $this->render('app/mobile.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
