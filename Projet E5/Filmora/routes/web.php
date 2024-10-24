<?php

// Inclure les contrôleurs
require_once __DIR__ . '/../controllers/IndexController.php';
require_once __DIR__ . '/../controllers/PageFilmController.php';
require_once __DIR__ . '/../controllers/AdminController.php';

// Récupérer l'URI de la requête
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Définir les routes
if ($uri === '/' || $uri === '/index') {
    // Route vers la page d'accueil
    $controller = new IndexController();
    $controller->index();

} elseif ($uri === '/pagefilms') {
    // Route vers la liste des films
    $controller = new PageFilmController();
    $controller->index();

} elseif (preg_match('#^/pagefilms/details/(\d+)$#', $uri, $matches)) {
    // Route vers les détails d'un film avec un ID dynamique
    $controller = new PageFilmController();
    $controller->details($matches[1]);

} elseif ($uri === '/admin') {
    // Route vers le panneau d'administration
    $controller = new AdminController();
    $controller->index();

} elseif ($uri === '/admin/ajouter') {
    // Route vers la page d'ajout d'un film
    $controller = new AdminController();
    $controller->ajouter();

} elseif (preg_match('#^/admin/modifier/(\d+)$#', $uri, $matches)) {
    // Route vers la page de modification d'un film
    $controller = new AdminController();
    $controller->modifier($matches[1]);

} else {
    // Route par défaut (page non trouvée)
    echo "404 - Page non trouvée";
}