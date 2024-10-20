
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Air Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="images/logos2.png" alt="Air Digital Logo" width="150"> 
            </a>
        </div>
        <ul class="menu">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="A-propos.html">A propos</a></li>
            <li><a href="Destination.html">Destinations</a></li>
            <li><a href="reservation.html">Reservations</a></li>
            <li><a href="Contact.html">contact</a></li>
        </ul>
        <div>
        <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php">Tableau de bord</a></li>
                    <a href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                <?php endif; ?>
            <a href="Connexion.html" class="btn-contacter">se connecter</a>
            <a href="Inscription.html" class="btn-reservation">s'inscrire</a>
        </div>
        <div class="responsive-menu"></div>
    </header>
    <?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}
?>
    <!-- acceuil section -->
    <section id="home">
        <h2>Bienvenue à l'agence</h2>
        <h4>Explorez le monde avec nous</h4>
        <p>Découvrez les plus belles destinations et voyagez en toute sécurité grâce à nos services premium.</p>
        <p>Avec Air Travel, vous profitez d’une expérience de voyage inoubliable, à des prix compétitifs.</p>
        <a href="#" class="btn-reservation home-btn">Réserver Maintenant</a>
        <div class="find_trip">
            <form action="">
                <div>
                    <label>Pays</label>
                    <input type="text" placeholder="Entrez un Pays">
                </div>
                <div>
                    <label>Ville</label>
                    <input type="text" placeholder="Entrez une ville">
                </div>
                <div>
                    <label>Région</label>
                    <input type="text" placeholder="Entrez une région">
                </div>
                <input type="submit" value="voir">
            </form>
        </div>
    </section>

    <!-- A propos section -->
    <section id="a-propos">
        <h1 class="title">A propos</h1>
        <div class="img-desc">
           <div class="left">
                <video src="images/video.mp4" autoplay loop></video>
           </div>
            <div class="right">
                <h3>Nous voyageons pour découvrir de nouvelles cultures, explorer des horizons inconnus et vivre des aventures extraordinaires.</h3>
                <p>Air Travel est votre partenaire de confiance pour tous vos besoins de voyage. Nous offrons des services de haute qualité, adaptés à tous vos besoins, que ce soit pour le tourisme, les affaires ou les escapades de dernière minute.</p>
                <a href="#">Lire Plus</a>
            </div>
        </div>
        
    </section>

    <!-- section destination -->
    <section id="reservation">
        <h1 class="title">Réservez votre voyage</h1>
        <div class="reservation-options">
            <!-- Réservation de Vols -->
            <div class="box">
                <h3>Réservez vos Vols</h3>
                <p>Profitez des meilleures offres pour vos vols internationaux ou domestiques avec Air Digital.</p>
                <form action="">
                    <label>Destination</label>
                    <input type="text" placeholder="Entrez votre destination">
                    <label>Date de départ</label>
                    <input type="date">
                    <label>Date de retour</label>
                    <input type="date">
                    <label>Prix (à partir de)</label>
                    <p><strong>300000FCFA</strong></p><br/>
                    <input type="submit" value="Réserver un vol">
                </form>
            </div>

            <!-- Réservation d'Hébergements -->
            <div class="box">
                <h3>Réservez vos Hébergements</h3>
                <p>Nous vous aidons à trouver les meilleurs hôtels, auberges ou appartements adaptés à votre budget.</p>
                <form action="">
                    <label>Ville</label>
                    <input type="text" placeholder="Entrez votre ville de destination">
                    <label>Date d'arrivée</label>
                    <input type="date">
                    <label>Date de départ</label>
                    <input type="date">
                    <label>Prix (par nuit, à partir de)</label>
                    <p><strong>50000FCFA</strong></p><br/>
                    <input type="submit" value="Réserver un hébergement">
                </form>
            </div>

            <!-- Réservation d'Activités Touristiques -->
            <div class="box">
                <h3>Réservez vos Activités Touristiques</h3>
                <p>Choisissez parmi une variété d'activités : visites guidées, expériences culinaires, excursions, et plus encore.</p>
                <form action="">
                    <label>Activité</label>
                    <input type="text" placeholder="Entrez une activité (ex. Safari, Visite de musée)">
                    <label>Date de l'activité</label>
                    <input type="date">
                    <label>Prix (à partir de)</label>
                    <p><strong>20000FCFA</strong></p><br/>
                    <input type="submit" value="Réserver une activité">
                </form>
            </div>
        </div>
    </section>
    <section id="popular-destination">
        <h1 class="title">Destinations populaires</h1>
        <div class="content">
            <!-- box -->
            <div class="box">
                <img src="images/paris3.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Paris</h4>
                        <p>La ville des lumières, un incontournable pour les amoureux de l'art, de la culture et de la gastronomie.</p>
                        <p>Découvrez la Tour Eiffel, les Champs-Élysées et bien plus encore.</p>
                        <p>Prix : <strong>500FCFA</strong></p><br/>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <div class="box">
                <img src="images/seoul.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Séoul</h4>
                        <p>Capitale dynamique de la Corée du Sud, Séoul allie histoire ancienne et technologies de pointe.</p>
                        <p>Découvrez les temples majestueux et les gratte-ciel futuristes.</p>
                        <p>Prix : <strong>800000FCFA</strong></p>
                        <br/>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <div class="box">
                <img src="images/new_york1.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>New York</h4>
                        <p>La ville qui ne dort jamais, avec ses monuments emblématiques comme la Statue de la Liberté et Times Square.</p>
                        <p>Un centre mondial de la culture, des affaires et de l'innovation.</p>
                        <p>Prix : <strong>100000FCFA</strong></p><br/>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <div class="box">
                <img src="images/montreal3.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Montréal</h4>
                        <p>La métropole canadienne où se mêlent parfaitement cultures française et anglaise.</p>
                        <p>Explorez les festivals, la gastronomie et l’architecture unique de cette ville multiculturelle.</p>
                        <p>Prix : <strong>600000FCFA</strong></p><br/>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <div class="box">
                <img src="images/tokio.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Tokyo</h4>
                        <p>Un mélange fascinant de technologie ultramoderne et de traditions millénaires. Tokyo ne dort jamais.</p>
                        <p>Une ville à explorer sans fin, avec des surprises à chaque coin de rue.</p>
                        <p>Prix : <strong>900000FCFA</strong></p><br/>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
        </div>
    </section>

    <!--  contact section -->
    <section id="contact">
        <h1 class="title">Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Prenom</label>
                    <input type="text">
                    <label>Nom</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numéro</label>
                    <input type="text">
                    <label>Date</label>
                    <input type="text">
                    <label>Autres Details</label>
                    <input type="text">
                    <label>Adresse</label>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.2630590319113!2d-8.02957312641728!3d12.63074002226274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51cd69eb2170a9%3A0xd10a942ea812b38a!2sOrange%20Digital%20Center!5e0!3m2!1sfr!2sml!4v1728570383727!5m2!1sfr!2sml" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>

    <footer>
        <p> Réalisé par <span>Femme et Digital</span> | Tous les droits sont réservés.</p>
    </footer>


    <script src="script.js"></script>


</body>
</html>