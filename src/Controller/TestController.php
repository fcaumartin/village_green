<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(ProduitRepository $repo): Response
    {
        $liste = $repo->findAll();

        return $this->json($liste, 200, [ "content-type" => "application/json"], [ "groups" => "read:produit"]);
    }
}
