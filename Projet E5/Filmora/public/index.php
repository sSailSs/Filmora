<?php
require_once __DIR__ . '/../controllers/IndexController.php';
require_once __DIR__ . '/../controllers/AdminController.php';
require_once __DIR__ . '/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    // Page d'accueil
    $controller = new IndexController();
    $controller->index();
} elseif ($uri === '/admin') {
    // Page d'administration
    $controller = new AdminController();
    $controller->index();
} elseif ($uri === '/admin/ajouter') {
    $controller = new AdminController();
    $controller->ajouter();
} elseif (preg_match('#^/admin/modifier/(\d+)$#', $uri, $matches)) {
    $id = $matches[1];
    $controller = new AdminController();
    $controller->modifier($id);
} elseif (preg_match('#^/admin/supprimer/(\d+)$#', $uri, $matches)) {
    $id = $matches[1];
    $controller = new AdminController();
    $controller->supprimer($id);
} else {
    echo "Page non trouvée";
}

// Route pour la page des films
if ($uri === '/pagefilms') {
    $controller = new PageFilmController();
    $controller->index();
}
// Route pour le détail d'un film
elseif (preg_match('#^/pagefilms/details/(\d+)$#', $uri, $matches)) {
    $controller = new PageFilmController();
    $controller->details($matches[1]);
} else {
    echo "Page non trouvée";
}