<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController
{

 //#[Route("/", methods:"GET", name:"racine")]

// Ou on tape ci dessous pour la route
// on peux choisir un name pour afficher un nom precis dans l'adresse (optionnel)
/**
 * @Route("/", name="racine", methods={"GET"})
 *
 */
    public function bonjour()
    {
       return new Response('Voici la page principale de COURTOT Cédric');
    }

/**
 * @Route("/produits/affiche-creneau-journee")
 *
 */
    public function afficheCreneau()
    {
       return new Response("Future page d'affichage de créneaux");
    }


 #[Route("/produits/{joker}")]
    public function afficheCreneautest($joker)
    {
       return new Response("Future page d'affichage de créneaux: {$joker}");
    }


}
