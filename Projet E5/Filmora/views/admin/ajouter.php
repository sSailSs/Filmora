<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Film</title>
</head>
<body>
    <h1>Ajouter un nouveau film</h1>
    <form action="/admin/ajouter" method="POST">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required>

        <label for="date_sortie">Date de Sortie :</label>
        <input type="date" name="date_sortie" id="date_sortie" required>

        <label for="image">Image :</label>
        <input type="text" name="image" id="image" required>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
