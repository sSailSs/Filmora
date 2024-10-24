<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du Film</title>
    <link rel="stylesheet" href="/public/stylesfilms.css"> <!-- Style -->
</head>
<body>
    <h1>Détails du Film : <?php echo htmlspecialchars($film['titre']); ?></h1>
    <p><strong>Genre :</strong> <?php echo htmlspecialchars($film['genre']); ?></p>
    <p><strong>Date de sortie :</strong> <?php echo htmlspecialchars($film['date_sortie']); ?></p>
    <p><strong>Synopsis :</strong> <?php echo htmlspecialchars($film['synopsis']); ?></p>
    <img src="/public/images/<?php echo htmlspecialchars($film['image']); ?>" alt="Affiche du film">

    <a href="/pagefilms">Retour à la liste des films</a>
</body>
</html>