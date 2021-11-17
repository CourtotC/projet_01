<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'admin')]
class AdminController extends AbstractController
{
    #[Route('/dashboard', name: '_dashboard')]
    public function adminDashboard()
    {
        return $this->render('admin/admin_dashboard.html.twig', [
        ]);
    }
}
