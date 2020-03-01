<?php

namespace App\Controller;

use App\Entity\Annouces;
use App\Form\AnnoucesType;
use App\Repository\AnnoucesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/annouces")
 */
class AnnoucesController extends AbstractController
{
    /**
     * @Route("/", name="annouces_index", methods={"GET"})
     */
    public function index(AnnoucesRepository $annoucesRepository): Response
    {
        return $this->render('annouces/index.html.twig', [
            'annouces' => $annoucesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="annouces_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $annouce = new Annouces();
        $form = $this->createForm(AnnoucesType::class, $annouce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annouce);
            $entityManager->flush();

            return $this->redirectToRoute('annouces_index');
        }

        return $this->render('annouces/new.html.twig', [
            'annouce' => $annouce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annouces_show", methods={"GET"})
     */
    public function show(Annouces $annouce): Response
    {
        return $this->render('annouces/show.html.twig', [
            'annouce' => $annouce,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="annouces_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Annouces $annouce): Response
    {
        $form = $this->createForm(AnnoucesType::class, $annouce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annouces_index');
        }

        return $this->render('annouces/edit.html.twig', [
            'annouce' => $annouce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annouces_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Annouces $annouce): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annouce->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annouce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('annouces_index');
    }
}
