<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    /**
     * @Route("/add/{produit}/{quantite}", name="add")
     */
    public function add(SessionInterface $session, Produit $produit, Request $request, $quantite = 1): Response
    {
        $panier = $session->get("panier");

        $panier = $panier?$panier:[];

        $present = -1;
        foreach($panier as $k => $v) {
            if ($v["produit"]->getId()==$produit->getId()) {
                $present = $k;
            }
        }

        if ($present === -1) {
            $panier[] = [
                "produit" => $produit,
                "quantite" => 1
            ];
        }
        else {
            $panier[$present]["quantite"]+=$quantite;
        }
                
        $session->set("panier", $panier);

        dump($panier);

        $previous_route = $request->headers->get('referer');

        return $this->redirect($previous_route);
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function panier(SessionInterface $session): Response
    {
        $panier = $session->get("panier");

        $panier = $panier?$panier:[];

        return $this->render('catalogue/panier.html.twig', [
            "panier" => $panier
        ]);
    }

    /**
     * @Route("/clear", name="clear")
     */
    public function clear(SessionInterface $session): Response
    {
        $session->set("panier", []);

        return $this->redirectToRoute("panier");
    }
}
