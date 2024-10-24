<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Administration des Films</title>
    <link rel="stylesheet" href="/public/stylesadmin.css"> <!-- Style du dashboard admin -->
</head>
<body>
    <h1>Dashboard - Administration des Films</h1>
    <a href="/admin/ajouter">Ajouter un nouveau film</a>
    
    <!-- Liste des films -->
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de Sortie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
                <tr>
                    <td><?php echo htmlspecialchars($film['titre']); ?></td>
                    <td><?php echo htmlspecialchars($film['date_sortie']); ?></td>
                    <td>
                        <a href="/admin/modifier/<?php echo $film['id']; ?>">Modifier</a>
                        <a href="/admin/supprimer/<?php echo $film['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce film ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>