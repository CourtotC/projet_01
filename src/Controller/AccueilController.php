<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController extends AbstractController
{




 //#[Route("/", methods:"GET", name:"racine")]

// Ou on tape ci dessous pour la route
// on peux choisir un name pour afficher un nom precis dans l'adresse (optionnel)
// /**
// //  * @Route("/", name="racine", methods={"GET"})
// //  *
// //  */
//     public function bonjour()
//     {
//        return new Response('Voici la page principale de COURTOT Cédric');
//     }






/**
 * @Route("/produits/affiche-creneau-journee")
 *
 */
   //  public function afficheCreneau()
   //  {
   //     return new Response("Future page d'affichage de créneaux");
   //  }



//  #[Route("/produits/{joker}")]
//     public function afficheCreneautest($joker)
//     {
//        return new Response("Future page d'affichage de créneaux: {$joker}");
//     }






//     #[Route("/produits/{var}")]
//     function afficheCreneau($var){
// return $this->render('creneau/affiche.html.twig',['title'=>ucwords(str_replace('-',' ',$var))]);
//     }




    // #[Route("/produits/{var}")]
    // function afficheCreneau($var){

    //   $commentaires=[
    //     'Je ne serai pas disponible sur cette période (Gautier)',
    //     'Je veux bien assurer la relève (Sophie)',
    //     "Pensez à reporter l'heure manquante (Mélanie)",
    //   ];

    //   return $this->render('creneau/affiche.html.twig',['title'=>ucwords(str_replace('-',' ',$var)),
    // 'commentaires'=> $commentaires]);
    // }

 #[Route("/", name:'racine')]
 function bonjour(){
   return $this->render('general/accueil.html.twig');
 }


}
