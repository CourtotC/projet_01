<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlternantController extends AbstractController
{
    #[Route('/alternant/dashboard', name: 'alternant_dashboard')]
    public function alternantDashboard()
    {
        return $this->render('alternant/alternant_dashboard.html.twig', [
        ]);
    }
}
