<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar avec Style</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Style pour la première navbar */
        .navbar-custom {
            background-color: #007bff; /* Couleur de fond de la navbar */
        }
        .navbar-custom .nav-link {
            color: white; /* Couleur des liens en blanc */
        }
        .navbar-custom .nav-link:hover {
            text-decoration: underline; /* Soulignement au survol */
        }

        /* Style pour le bloc guylene */
        .guylene {
            background-color: #f8f9fa; /* Couleur de fond du bloc */
            padding: 30px; /* Ajout de padding à l'intérieur du bloc */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Ombre pour le bloc */
            margin: 20px auto; /* Marge auto pour centrer le bloc */
        }

        /* Style pour les options */
        .option-block {
            background-color: #00ffbf; /* Couleur de fond pour chaque option */
            border: 1px solid #dee2e6; /* Bordure autour de chaque option */
            border-radius: 5px; /* Coins arrondis */
            padding: 15px; /* Rembourrage interne */
            margin: 10px; /* Marge entre les options */
            flex: 1; /* Permet aux blocs de s'étendre également */
            transition: transform 0.3s; /* Transition pour l'effet de survol */
            text-align: center; /* Centrer le texte */
        }
        /* Style pour les options */
        .option-block1 {
            background-color: #ff0080; /* Couleur de fond pour chaque option */
            border: 1px solid #dee2e6; /* Bordure autour de chaque option */
            border-radius: 5px; /* Coins arrondis */
            padding: 15px; /* Rembourrage interne */
            margin: 10px; /* Marge entre les options */
            flex: 1; /* Permet aux blocs de s'étendre également */
            transition: transform 0.3s; /* Transition pour l'effet de survol */
            text-align: center; /* Centrer le texte */
        }
        .option-block2 {
            background-color: chartreuse; /* Couleur de fond pour chaque option */
            border: 1px solid #dee2e6; /* Bordure autour de chaque option */
            border-radius: 5px; /* Coins arrondis */
            padding: 15px; /* Rembourrage interne */
            margin: 10px; /* Marge entre les options */
            flex: 1; /* Permet aux blocs de s'étendre également */
            transition: transform 0.3s; /* Transition pour l'effet de survol */
            text-align: center; /* Centrer le texte */
           
        }
        .option-block:hover {
            transform: scale(1.05); /* Zoom léger au survol */
        }
        .option-block1:hover {
            transform: scale(1.05); /* Zoom léger au survol */
        }
        .option-block2:hover {
            transform: scale(1.05); /* Zoom léger au survol */
        }
        .option-title {
            font-weight: bold; /* Texte en gras pour le titre de l'option */
            margin-bottom: 10px; /* Marge en bas du titre */
            color: #007bff; /* Couleur des titres */
        }
        img {
            width: 50px;
            border-radius: 50%; /* Arrondir l'image */
        }
        .options-container {
            display: flex; /* Utilisation de Flexbox pour l'alignement horizontal */
            justify-content: space-around; /* Espacement égal entre les blocs */
            flex-wrap: wrap; /* Permet aux blocs de passer à la ligne si nécessaire */
        }

        /* Style pour le bloc partager les médias */
        .share-media {
            background-color: #e9ecef; /* Couleur de fond du bloc */
            padding: 20px; /* Ajout de padding */
            border-radius: 10px; /* Coins arrondis */
            margin: 20px auto; /* Marge auto pour centrer le bloc */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Ombre pour le bloc */
            text-align: center; /* Centrer le texte */
        }
        .share-media input[type="file"] {
            margin: 10px 0; /* Marge autour du champ de fichier */
        }
        .share-media button {
            margin-top: 10px; /* Marge au-dessus du bouton */
        }
        body{
            background-image: url(FH.jpg);
            
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Première navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <img src="Capture.PNG" alt="Logo" class="me-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span id="titreOnglet">Tableau de Bord</span>
            <div class="profil">
                <i class="fa fa-user-circle icône-profil"></i>
                <span>Gestionnaire</span>
            </div>   
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="a_propo.php">À propos</a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="guylene">
            <h4 class="text-center mb-3">Options</h4>
            <div class="options-container">
                <div class="option-block">
                    <div class="option-title">Voir les annonces</div>
                    <a class="btn btn-link" href="annonce.php">Accéder</a>
                </div>
                <div class="option-block1">
                    <div class="option-title">Voir les médias</div>
                    <a class="btn btn-link" href="medias.php">Accéder</a>
                </div>
                <div class="option-block2">
                    <div class="option-title">Proposer un service</div>
                    <a class="btn btn-link" href="#">Accéder</a>
                </div>
    
            </div>
        </div>

        <!-- Bloc Partager les Médias -->
        <div class="share-media">
            <h4>Partager les Médias</h4>
            <input type="file" accept="image/*" multiple>
            <br>
            <button class="btn btn-primary">Partager</button>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h2 class="m-0 text-white"><i class="fa-duotone fa-solid fa-hands-holding-child"></i> Solidarité et Entraide</h2>
                        </a>
                        <p class="mt-3 mb-4">"Entraide et solidarité pour des personnes socialement vulnérables".</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h3 class="text-light mb-0">Nos contacts</h3>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">MINAS-Poste Central, Yaoundé, CAMEROUN</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">cabinetminas@yahoo.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+222 22 29 58</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-FAX text-primary me-2"></i>
                                <p class="mb-0">+222 23 11 21</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h3 class="text-light mb-0">Nos Pages</h3>
                            <div class="link-animated d-flex justify-content-start">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>