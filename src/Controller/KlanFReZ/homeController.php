<?php

namespace App\Controller\KlanFReZ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('klan_f_re_z/index.html.twig', [
            'controller_name' => 'homeController',
        ]);
    }
}
