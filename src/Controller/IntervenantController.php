<?php

namespace App\Controller;

use App\Entity\Intervenant;
use App\Form\IntervenantFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


 // V2 si on met une route générale ici on met le debut de la route et du name
//V2 #[Route("/intervenant/", name: "intervenant")]
class IntervenantController extends AbstractController
{
    // #[Route("/user", methods: "GET")]
    // public function creationIntervenant()
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     // Création d’une instance
    //     // $inter = new Intervenant();
    //     // $inter->setNom("Leclerc");
    //     // $inter->setPrenom("Gautier");
    //     // $inter->setSpecialiteprofessionnelle("Docteur en informatique");
    //     $inter = new Intervenant();
    //     $inter->setNom("Dubois");
    //     $inter->setPrenom("Suzanne");
    //     $inter->setSpecialiteprofessionnelle("Ingénieur systèmes");

    //     // informer Doctrine que l'on veut persister ces données (ne provoque pas de Query)
    //     $entityManager->persist($inter);
    //     //  exécution de la requête (i.e. the INSERT query). Quand cette méthode est appelée
    //     // Doctrine vérifie parmi les objets qu’elle gère s’ils doivent être persistés dans la
    //     // bdd. En l’occurrence, un nouvel enregistrement est créé (Doctrine est capable de
    //     // déterminer si elle doit INSERT ou UPDATE votre entité
    //     $entityManager->flush();
    //     return new Response('mise a jour ok');
    // }


   //V2 #[Route("create", name: "_create")]
    #[Route("/intervenant/create", name: "intervenant_create")]
    public function new(Request $request)
    {
        $task = new Intervenant();
        $form = $this->createForm(IntervenantFormType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->render('intervenant/static/success.html.twig');
            //return $this->redirectToRoute('newIntervenant_success');
        }
        return $this->render('intervenant/new.html.twig', ['intervenantForm' => $form->createView(),]);
    }
//V2 #[Route("liste", name: "_liste")]
    #[Route("/intervenant/liste", name: "intervenant_liste")]
    public function intervenantsList()
    {
        $sousTitre = 'liste des intervenants';
        $inter= $this->getDoctrine()
            ->getRepository(Intervenant::class)
            ->findAll();
            return $this->render('intervenant/intervenant.html.twig', [
                'intervenant_liste' => $inter,
                'sous_titre'=> $sousTitre,
            ]);
        }

      //V2   #[Route("delete/{value}", name: '_delete')]
        #[Route("intervenant/delete/{value}", name: 'intervenant_delete')]
    public function delete($value) {
        $em = $this->getDoctrine()->getManager();
        $intervenant = $em->getRepository(Intervenant::class)->find($value);
        $em->remove($intervenant);
        $em->flush();
        return $this->intervenantsList();
    }
 //V2 #[Route("dashboard", name: "_dashboard")]
    #[Route("/intervenant/dashboard", name: "intervenant_dashboard")]
    public function intervenantsDashboard() {
        return $this->render('Intervenant/intervenant_dashboard.html.twig');
    }

    //V2 #[Route("/matieres/lister", name: "_matieres_lister")]
    #[Route("/intervenant/matieres/lister", name: "intervenant_matieres_lister")]
    public function intervenantsMatieresLister() {
        return $this->render('Intervenant/intervenant_matieres_lister.html.twig');
        // intervenant/intervenant_matieres_lister
    }
    #[Route("/cucu", name: "intervenant_matieres_lister")]
    public function cucu() {
        return $this->render('Intervenant/newimage.html.twig');
        // intervenant/intervenant_matieres_lister
    }
    
}


