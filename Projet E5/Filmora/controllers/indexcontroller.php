<?php

class IndexController {

    public function index() {
        // Appelle la vue de l'accueil
        require_once __DIR__ . '/../views/films/index.php';
    }
}