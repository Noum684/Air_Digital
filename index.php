<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence de Voyage - Air Digital</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header avec menu de navigation -->
    <header>
        <div class="logo">
            <a href="index.php"><img src="images/logos2.png" alt="Logo Air Digital"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="destinations.php">Destinations</a></li>
                <li><a href="reservation.php">Réservation</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="dashboard.php">Tableau de bord</a></li>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Slider pour les destinations -->
    <section id="slider">
        <div class="slider-container">
            <div class="slide">
                <img src="images/paris.jpg" alt="Paris">
                <div class="caption">Explorez Paris - La ville de la lumière</div>
            </div>
            <div class="slide">
                <img src="images/new-york.jpg" alt="New York">
                <div class="caption">Découvrez New York - La ville qui ne dort jamais</div>
            </div>
            <div class="slide">
                <img src="images/tokyo.jpg" alt="Tokyo">
                <div class="caption">Voyagez à Tokyo - Tradition et modernité</div>
            </div>
        </div>
    </section>

    <!-- Section pour la recherche de voyages -->
    <section class="find_trip">
        <h2>Recherchez votre prochaine aventure</h2>
        <form action="recherche.php" method="post">
            <div>
                <label for="destination">Destination</label>
                <select name="destination" required>
                    <option value="paris">Paris</option>
                    <option value="new-york">New York</option>
                    <option value="tokyo">Tokyo</option>
                    <option value="seoul">Séoul</option>
                    <option value="montreal">Montréal</option>
                </select>
            </div>
            <div>
                <label for="datedeb">Date de départ</label>
                <input type="date" name="datedeb" required>
            </div>
            <div>
                <label for="datefn">Date de retour</label>
                <input type="date" name="datefn" required>
            </div>
            <div>
                <input type="submit" value="Rechercher">
            </div>
        </form>
    </section>

    <!-- Section présentation rapide de l'agence -->
    <section id="presentation">
        <h2>Pourquoi choisir Air Digital ?</h2>
        <p>Avec plus de 20 ans d'expérience, Air Digital vous garantit des voyages sur mesure et des expériences inoubliables dans le monde entier. Que vous recherchiez une aventure exotique ou un séjour relaxant, notre équipe est là pour vous aider à planifier le voyage parfait.</p>
    </section>

    <!-- Footer -->
    <footer>
    <p> Réalisé par <span>Femme et Digital</span> | Tous les droits sont réservés.</p>
    </footer>

</body>
</html>
