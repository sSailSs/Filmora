<?php
// Charger le fichier .env
$env = parse_ini_file(__DIR__ . '/../.env');

// Accéder aux valeurs du fichier .env
$appName = $env['APP_NAME'];
$host = $env['DB_HOST'];
$dbName = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];

// Connexion à la base de données
try {
    $dsn = "mysql:host=$host;port=" . $env['DB_PORT'] . ";dbname=$dbName";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}