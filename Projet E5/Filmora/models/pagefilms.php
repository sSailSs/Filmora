<?php

class PageFilms {
    private $db;

    public function __construct() {
        $this->db = getDBConnection(); // Connexion à la base de données
    }

    // Récupérer tous les films
    public function getAllFilms() {
        $sql = "SELECT * FROM films"; // Table "films" dans la base de données
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Récupérer un film par son ID
    public function getFilmById($id) {
        $sql = "SELECT * FROM films WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}