<?php

namespace App\Controller;

use App\Entity\Incidencias;
use App\Form\IncidenciasType;
use App\Repository\IncidenciasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/incidencias')]
class IncidenciasController extends AbstractController
{
    #[Route('/', name: 'app_incidencias_index', methods: ['GET'])]
    public function index(IncidenciasRepository $incidenciasRepository): Response
    {
        return $this->render('incidencias/index.html.twig', [
            'incidencias' => $incidenciasRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_incidencias_new', methods: ['GET', 'POST'])]
    public function new(Request $request, IncidenciasRepository $incidenciasRepository): Response
    {
        $incidencia = new Incidencias();
        $form = $this->createForm(IncidenciasType::class, $incidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $incidenciasRepository->add($incidencia, true);

            return $this->redirectToRoute('app_incidencias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('incidencias/new.html.twig', [
            'incidencia' => $incidencia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_incidencias_show', methods: ['GET'])]
    public function show(Incidencias $incidencia): Response
    {
        return $this->render('incidencias/show.html.twig', [
            'incidencia' => $incidencia,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_incidencias_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Incidencias $incidencia, IncidenciasRepository $incidenciasRepository): Response
    {
        $form = $this->createForm(IncidenciasType::class, $incidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $incidenciasRepository->add($incidencia, true);

            return $this->redirectToRoute('app_incidencias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('incidencias/edit.html.twig', [
            'incidencia' => $incidencia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_incidencias_delete', methods: ['POST'])]
    public function delete(Request $request, Incidencias $incidencia, IncidenciasRepository $incidenciasRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$incidencia->getId(), $request->request->get('_token'))) {
            $incidenciasRepository->remove($incidencia, true);
        }

        return $this->redirectToRoute('app_incidencias_index', [], Response::HTTP_SEE_OTHER);
    }
}
