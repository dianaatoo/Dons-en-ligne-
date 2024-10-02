<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Accueil - Mon Site</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			min-height: 100vh;
			text-align: center;
			background-color: #white; /* Bleu ciel */
		}
		
		header {
			background-color: #4682B4; /* Bleu foncé */
			padding: px;
			color: white;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		
		header img {
			width: 50px;
			border-radius: 50px;
		}
		
		.wow {
            visibility: visible;
        }

        /* Animation au survol */
        .btn-square {
            width: 40px;
            height: 40px;
        }
		nav {
			margin: 20px 0;
		}
		
		nav a {
			margin: 0 15px;
			text-decoration: none;
			color: white;
		}
		
		.content {
			flex: 1;
			margin: 20px;
			padding:150px; ;
			background-color: white; /* Blanc */
			padding:fond20px;
			background-image: url(message.PNG);
			
		}
		
		
		button {
			padding: 10px 20px;
			background-color: #4682B4; /* Bleu foncé */
			color: white;
			border: none;
			cursor: pointer;
			border-radius: 5px;
		}
		
		button:hover {
			background-color: #87CEEB; /* Bleu ciel */
		}
		/* chargement */
#loader {
  position: fixed;
  width: 100%;
  height: 100%;
  background: white;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Fade-out animation */
.fade-out {
  opacity: 0;
  transition: opacity 1s ease-out;
}
    
	</style>
</head>
<body>

	<header>
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
			<a href="index.php">Accueil</a>		
			<a href="a_propo.php">A propos</a>	
			<a href="afficheannonce.php">Voir les annonces</a>
			<a href="medias.php">Voir les médias</a>
			<a href="connexion.php">Se connecter </a>

                </div>
            </div>
        </nav>
	</header>
	<!-- Loader -->
	<div id="loader" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
    <div class="loader"></div>
  </div>
	<div class="content"><br><br><br><br><br>
		<button onclick="window.location.href='inscription.php'">Rejoignez-nous</button>
	</div>

	
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
	<script>
		
      //chargement de la page
  window.addEventListener("load", function () {
    const loader = document.getElementById('loader');
    loader.classList.add('fade-out'); // Ajoute l'animation de fondu
    setTimeout(() => loader.style.display = 'none', 1000); // Masque le loader après l'animation
  });
	</script>
    <!-- Footer End -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>