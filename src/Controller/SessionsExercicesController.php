<?php

namespace App\Controller;

use App\Entity\SessionsExercices;
use App\Form\SessionsExercicesType;
use App\Repository\SessionsExercicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sessions/exercices')]
class SessionsExercicesController extends AbstractController
{
    #[Route('/', name: 'app_sessions_exercices_index', methods: ['GET'])]
    public function index(SessionsExercicesRepository $sessionsExercicesRepository): Response
    {
        return $this->render('sessions_exercices/index.html.twig', [
            'sessions_exercices' => $sessionsExercicesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sessions_exercices_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sessionsExercice = new SessionsExercices();
        $form = $this->createForm(SessionsExercicesType::class, $sessionsExercice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sessionsExercice);
            $entityManager->flush();

            return $this->redirectToRoute('app_sessions_exercices_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sessions_exercices/new.html.twig', [
            'sessions_exercice' => $sessionsExercice,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessions_exercices_show', methods: ['GET'])]
    public function show(SessionsExercices $sessionsExercice): Response
    {
        return $this->render('sessions_exercices/show.html.twig', [
            'sessions_exercice' => $sessionsExercice,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sessions_exercices_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SessionsExercices $sessionsExercice, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SessionsExercicesType::class, $sessionsExercice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sessions_exercices_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sessions_exercices/edit.html.twig', [
            'sessions_exercice' => $sessionsExercice,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessions_exercices_delete', methods: ['POST'])]
    public function delete(Request $request, SessionsExercices $sessionsExercice, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sessionsExercice->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sessionsExercice);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sessions_exercices_index', [], Response::HTTP_SEE_OTHER);
    }
}
