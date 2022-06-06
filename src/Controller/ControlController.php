<?php

namespace App\Controller;

use App\Entity\Control;
use App\Form\ControlType;
use App\Repository\ControlRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/control')]
class ControlController extends AbstractController
{
    #[Route('/', name: 'app_control_index', methods: ['GET'])]
    public function index(ControlRepository $controlRepository): Response
    {
        return $this->render('control/index.html.twig', [
            'controls' => $controlRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_control_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ControlRepository $controlRepository): Response
    {
        $control = new Control();
        $form = $this->createForm(ControlType::class, $control);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $controlRepository->add($control, true);

            return $this->redirectToRoute('app_control_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('control/new.html.twig', [
            'control' => $control,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_control_show', methods: ['GET'])]
    public function show(Control $control): Response
    {
        return $this->render('control/show.html.twig', [
            'control' => $control,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_control_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Control $control, ControlRepository $controlRepository): Response
    {
        $form = $this->createForm(ControlType::class, $control);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $controlRepository->add($control, true);

            return $this->redirectToRoute('app_control_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('control/edit.html.twig', [
            'control' => $control,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_control_delete', methods: ['POST'])]
    public function delete(Request $request, Control $control, ControlRepository $controlRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$control->getId(), $request->request->get('_token'))) {
            $controlRepository->remove($control, true);
        }

        return $this->redirectToRoute('app_control_index', [], Response::HTTP_SEE_OTHER);
    }
}
