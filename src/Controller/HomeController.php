<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/empleados", name="empleados")
     */
    public function empleados()
    {
        return $this->render('empleados/index.html.twig');
    }

    /**
     * @Route("/coches", name="coches")
     */
    public function coches()
    {
        return $this->render('coches/index.html.twig');
    }

    /**
     * @Route("/control", name="control")
     */
    public function control()
    {
        return $this->render('control/index.html.twig');
    }

    /**
     * @Route("/incidencia", name="incidencia")
     */
    public function incidencia()
    {
        return $this->render('incidencia/index.html.twig');
    }

    /**
     * @Route("/render-header", name="renderHeader")
     */
    public function renderHeader()
    {
        $arrayMenu = array(
            'empleados', 'vehiculos', 'mantenimiento', 'incidencia',
        );

        return $this->render('menuheader.html.twig', [
            'arrayMenu' => $arrayMenu,
        ]);
    }
}