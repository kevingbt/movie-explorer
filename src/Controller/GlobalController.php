<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GlobalController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('global/index.html.twig');
    }

    #[Route('/films', name: 'films')]
    public function films(): Response
    {

        $listFilm = [
            ['id' => 1, 'title' => 'Inception', 'année' =>
            2010],
            ['id' => 2, 'title' => 'The Odyssey', 'année' => 2026],
            ['id' => 3, 'title' => 'Interstellar', 'année' => 2014],
        ];

        return $this->render('global/films.html.twig', ['titre' => 'Liste des films', 'films' => $listFilm]);
    }

    #[Route('/api/films', name: 'list_films', methods: ['GET'])]
    public function apiFilms(): Response
    {

        $listFilm = [
            ['id' => 2, 'title' => 'Memento', 'année' => 2000],
            ['id' => 2, 'title' => 'Le Prestige', 'année' => 2006],
            ['id' => 2, 'title' => 'The Dark Knight : Le Chevalier Noir', 'année' => 2008],
            ['id' => 1, 'title' => 'Inception', 'année' => 2010],
            ['id' => 2, 'title' => 'Interstellar', 'année' => 2014],
            ['id' => 2, 'title' => 'Dunkerque', 'année' => 2017],
            ['id' => 2, 'title' => 'Tenet', 'année' => 2020],
            ['id' => 2, 'title' => 'Oppenheimer', 'année' => 2023],
            ['id' => 3, 'title' => 'The Odyssey', 'année' => 2026],
        ];

        return new JsonResponse($listFilm);
    }

    #[Route('/film/{id}', name: 'film')]
    public function film(int $id): Response
    {
        return $this->render('global/film.html.twig', ['id' => $id]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('global/contact.html.twig');
    }
}
