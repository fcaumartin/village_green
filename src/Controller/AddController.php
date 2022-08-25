<?php

namespace App\Controller;

use App\Form\ProdType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddController extends AbstractController
{
    #[Route('/add1', name: 'add1')]
    public function add1(Request $request): Response
    {
        if ($request->isMethod("post")) {
            dd($request->request->get("nom"));
        }
        return $this->render('add/add1.html.twig', [
        ]);
    }

    #[Route('/add2', name: 'add2')]
    public function add2(Request $request): Response
    {
        $form = $this->createForm(ProdType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form);
        }


        return $this->render('add/add2.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
