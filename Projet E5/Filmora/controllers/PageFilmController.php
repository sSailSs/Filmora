<?php

require_once __DIR__ . '/../models/pagefilms.php';

class PageFilmController {

    // Affiche la liste des films
    public function index() {
        $filmModel = new PageFilms();
        $films = $filmModel->getAllFilms(); // Récupère tous les films
        require_once __DIR__ . '/../views/films/pagefilms.php'; // Charge la vue avec les films
    }

    // Affiche les détails d'un film spécifique
    public function details($id) {
        $filmModel = new PageFilms();
        $film = $filmModel->getFilmById($id); // Récupère les détails du film par ID
        require_once __DIR__ . '/../views/films/detaifilm.php'; // Charge la vue de détail
    }
}