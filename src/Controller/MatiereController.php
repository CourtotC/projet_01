<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Matiere;
use App\Entity\Intervenant;

class MatiereController extends AbstractController
{
    #[Route('/matiere/creer', name: 'matiere_creer')]
    public function matiereCreer(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        //Recuperation de l'intervanant auquel on veut attribuer la nouvelle matiere
        // $inter = $this->getDoctrine()->getRepository(Intervenant::class)->find(1);
        // $newMat = new Matiere(); // creation d'une instance de matiere
        // $newMat->setIntitule("Java");
        // $newMat->setDuree(39);
        // $newMat->setFkIntervenant($inter);

        $inter = $this->getDoctrine()->getRepository(Intervenant::class)->find(4);
        $newMat = new Matiere(); // creation d'une instance de matiere
        $newMat->setIntitule("Réseau normes et protocoles RNP");
        $newMat->setDuree(47);
        $newMat->setFkIntervenant($inter);

        $entityManager->persist($newMat);
        $entityManager->flush();

        return new Response("Création d'une matiére avec l'id" . $newMat->getId());
    }

    #[Route('/admin/matiere/liste', name: 'admin_matiere_liste')]
    public function matiereList()
    {
        $sousTitre = 'liste des matières :';
        $mats = $this->getDoctrine()->getRepository(Matiere::class)->findAll();
        return $this->render('matiere/matieresListe.html.twig',
        ['matieres_liste'=>$mats,
        'sous_titres'=>$sousTitre]);
    }
}
