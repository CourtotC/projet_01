<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Commandes 
{
    #[Route("/commandes/recapitulatif")]
    public function recap()
    {
        return new Response('récapitulatif des commandes');
    }

    /**
     * @Route("/commandes/{joker}", requirements={"joker"= "^(soldées)|(en cours)$"})
     */
    public function statut($joker)
    {
        return new Response("liste des commandes '{$joker}'");
    }

}