<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films - Mon site de films</title>
    <link rel="stylesheet" href="stylesfilms.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
    <!-- Barre de navigation -->
    <header>
        <div class="logo">Mon Site</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="films.php" class="active">Films</a></li>
                <li><a href="series.php">Séries</a></li>
                <li><a href="account.php">Moi</a></li>
            </ul>
            <div class="search-icon">
                <input type="text" placeholder="Search...">
            </div>
            <div class="user-icon">
                <a href="login.php">Connexion</a>
            </div>
        </nav>
    </header>

    <!-- Section de filtres -->
    <aside class="filter">
        <h3>Filtrer par</h3>
        <ul>
            <li>Alphabet : A, B, C...</li>
            <li>Genre : Action, Comédie, Drame...</li>
            <li>Type : Film, Série...</li>
            <li>Année : 2023, 2022...</li>
            <li>Étoiles : ⭐⭐⭐⭐⭐</li>
        </ul>
        <h4>Dernière recherche</h4>
        <p>...</p>
    </aside>

    <!-- Section de films -->
    <section class="movies-grid">
        <div class="movie-card">
            <img src="movie1.jpg" alt="Film 1">
            <p>Film 1</p>
        </div>
        <div class="movie-card">
            <img src="movie2.jpg" alt="Film 2">
            <p>Film 2</p>
        </div>
        <div class="movie-card">
            <img src="movie3.jpg" alt="Film 3">
            <p>Film 3</p>
        </div>
        <div class="movie-card">
            <img src="movie4.jpg" alt="Film 4">
            <p>Film 4</p>
        </div>
        <!-- Plus de films ici -->
    </section>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">&raquo;</a>
    </div>
</body>
</html>
