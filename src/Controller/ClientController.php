<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/client", name="app_client")
     */
    public function index(): Response
    {
        return $this->render('client/produit.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
}
