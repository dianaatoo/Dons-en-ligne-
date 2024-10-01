 <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos </title>
    <!-- Liens CSS Bootstrap et autres dépendances -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .bg-header {
            background-image: url(MYP3600-scaled.jpg); /* Remplacez par votre image d'arrière-plan */
            background-size: cover;
            background-position: center;
        }
        nav {
            display: flex;
            background:blue;
        }
        nav a {
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            text-align: right;
        }
        nav a:hover {
            background: #555;
            
        }

        .wow {
            visibility: visible;
        }

        /* Animation au survol */
        .btn-square {
            width: 40px;
            height: 40px;
        }
        img {
			width: 50px;
			border-radius: 50px;
		}
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
            <img src="Capture.PNG" alt="Logo" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Accueil</a>
                    <a href="" class="nav-item nav-link active">A propos</a>
                </div>
            </div>
        </nav>

        <!-- Header Section -->
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">À propos de nous</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">À propos de nous</h5>
                        <h1 class="mb-0">Plateforme de Solidarité et d'entraide pour des personnes socialement vulnerables</h1>
                    </div>
                    <p class="mb-4"><p>Une plateforme en ligne dédiée à soutenir les personnes socialement vulnérables,
                         en les connectant avec des ressources <br>
                    et des services qui leur permettent de surmonter leurs difficultés.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Objectifs</h5>
                            <p> La plateforme de solidarité et d'entraide sociales visent à fournir un soutien <br>
		et une assistance aux personnes socialement vulnérables, telles que :</p>
<ul>
<li>- Les personnes âgées isolées</li>
<li>- Les personnes handicapées</li>
<li>- Les familles monoparentales</li>
<li>- Les personnes sans abri</li>
<li>- Les réfugiés</li>
<li>- Les orphelins</li>
<li>- Les personnes victimes de violence ou d'exploitation</li>
</ul>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fonctionnalités :</h5>
                            <ul>
			<li>Gestion des demandes d'aide et de soutien</li>
			<li>Connexion avec des partenaires et des organisations de solidarité</li>
			<li>Accès à des ressources et des services concrets (vital, logement, santé, etc.)</li>
			<li>Communication et suivi avec les bénéficiaires</li>
			<li>Évaluation et amélioration continue des services offerts</li>
		</ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="CAMRAIL.webp" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

  <!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="row">
            <!-- Utilisation de Bootstrap pour une grille de 4 colonnes -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="FH.jpg" class="img-fluid rounded" alt="DK.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="message.PNG" class="img-fluid rounded" alt="message.PNG" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="SSS.jpg" class="img-fluid rounded" alt="SSS.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="IMG-20240912-WA001.jpg" class="img-fluid rounded" alt="IMG-20240912-WA001.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h2 class="m-0 text-white"><i class="fa-duotone fa-solid fa-hands-holding-child"></i>Solidarité et Entraide</h2>
                        </a>
                        <p class="mt-3 mb-4">"Entraide et solidarité pour des personnes socialement vulnerables ".</p>
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
                                <p class="mb-0">+222 22 29 58 </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-FAX text-primary me-2"></i>
                                <p class="mb-0">+222 23 11 21 </p>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h3 class="text-light mb-0">Nos Pages</h3>
                            <div class="link-animated d-flex  justify-content-start">
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

    <!-- Liens JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>