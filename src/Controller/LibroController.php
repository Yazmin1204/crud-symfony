<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LibroController extends AbstractController
{
    /**
     * @Route("/libro", name="libro")
     */
    public function index()
    {
        return $this->render('libro/index.html.twig', [
            'controller_name' => 'LibroController',
        ]);
    }
}
