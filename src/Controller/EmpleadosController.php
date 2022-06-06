<?php

namespace App\Controller;

use App\Entity\Empleados;
use App\Form\EmpleadosType;
use App\Repository\EmpleadosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/empleados')]
class EmpleadosController extends AbstractController
{
    #[Route('/', name: 'app_empleados_index', methods: ['GET'])]
    public function index(EmpleadosRepository $empleadosRepository): Response
    {
        return $this->render('empleados/index.html.twig', [
            'empleados' => $empleadosRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_empleados_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EmpleadosRepository $empleadosRepository): Response
    {
        $empleado = new Empleados();
        $form = $this->createForm(EmpleadosType::class, $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $empleadosRepository->add($empleado, true);

            return $this->redirectToRoute('app_empleados_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empleados/new.html.twig', [
            'empleado' => $empleado,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_empleados_show', methods: ['GET'])]
    public function show(Empleados $empleado): Response
    {
        return $this->render('empleados/show.html.twig', [
            'empleado' => $empleado,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_empleados_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Empleados $empleado, EmpleadosRepository $empleadosRepository): Response
    {
        $form = $this->createForm(EmpleadosType::class, $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $empleadosRepository->add($empleado, true);

            return $this->redirectToRoute('app_empleados_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empleados/edit.html.twig', [
            'empleado' => $empleado,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_empleados_delete', methods: ['POST'])]
    public function delete(Request $request, Empleados $empleado, EmpleadosRepository $empleadosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empleado->getId(), $request->request->get('_token'))) {
            $empleadosRepository->remove($empleado, true);
        }

        return $this->redirectToRoute('app_empleados_index', [], Response::HTTP_SEE_OTHER);
    }
}
