<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogueController extends AbstractController
{
    #[Route("/", name:"accueil")]
    public function index(CategorieRepository $repo): Response
    {
        $categories = $repo->findAll();

        return $this->render('catalogue/index.html.twig', [
            "categories" => $categories
        ]);
    }

    #[Route("/categorie/{categorie}", name:"categorie")]
    public function categorie(Categorie $categorie): Response
    {
        

        return $this->render('catalogue/categorie.html.twig', [
            "categorie" => $categorie
        ]);
    }

    #[Route("/souscategorie/{souscategorie}", name:"souscategorie")]
    public function souscategorie(SousCategorie $souscategorie): Response
    {
        

        return $this->render('catalogue/souscategorie.html.twig', [
            "sousCategorie" => $souscategorie
        ]);
    }

    #[Route("/produit/{produit}", name:"produit")]
    public function produit(Produit $produit): Response
    {
        

        return $this->render('catalogue/produit.html.twig', [
            "produit" => $produit
        ]);
    }
}
