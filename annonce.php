<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PASSER UNE ANNONCE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ADD8E6;
        }
        
        .container {
            width: 90%;
            margin: 40px auto;
            padding: 50px;
            border: 1px solid #87CEEB;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        img {
			width: 50px;
			border-radius: 50px;
		}
        .association-block {
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .association-block h2 {
            margin-top: 0;
        }
        
        .association-block label {
            display: block;
            margin-bottom: 10px;
        }
        
        .association-block input[type="text"], 
        .association-block textarea {
            width: 95%;
            margin-bottom: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .buttons {
            text-align: right;
        }
        
        .buttons button[type="button"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: left;
        }
        
        .buttons button[type="submit"] {
            background-color: #4682B4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body> 
    <header><div class="container-fluid position-relative p-0">
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
			<a href="annonces.php">Voir les annonces</a>
			<a href="medias.php">Voir les médias</a>

                </div>
            </div>
        </nav> 
    </header> 
<div class="container">
    <h1>PASSER UNE ANNONCE</h1>
    <form method="POST" action="traitannonce.php">
        <div class="association-block">
            <h2>Informations de l'association</h2>
            <label>Nom de l'association :</label>
            <input type="text" name="nomA" required>
            <label>Sigle :</label>
            <input type="text" name="sigle" required>
            <label>Région :</label>
            <select name="region" required>
                <option value="Sud">Sud</option>
                <option value="Centre">Centre</option>
                <option value="Est">Est</option>
                <option value="Ouest">Ouest</option>
                <option value="Littoral">Littoral</option>
                <option value="Adamaoua">Adamaoua</option>
                <option value="Extreme-nord">Extreme-nord</option>
                <option value="Nord-ouest">Nord-ouest</option>
                <option value="Sud-ouest">Sud-ouest</option>
                <option value="Nord">Nord</option>
            </select>
            <label>Département :</label>
            <input type="text" name="departement" required>
            <label>Arrondissement :</label>
            <input type="text" name="arrondissement" required>
            <label>Zone d'intervention :</label>
            <input type="text" name="zone" required>
            <h3>periode de validité de l'annonce </h3>
            <label>date_limite :</label>
            <input type="date" name="dateL" required>
        </div>
        <label>Titre de l'annonce :</label>
        <input type="text" name="titre" required><br>
        <label for="type">Choisir la catégorie :</label>
        <select id="type" name="categorie" required>
            <option value="aide">Aide</option>
            <option value="Service">Service</option>
            <option value="technique">Aide technique</option>
        </select><br>
        <label>Description :</label>
        <textarea name="description" required style="width: 100%; height: 200px;"></textarea>
        <div class="buttons">
            <button type="button" onclick="window.location.href='index.html'">Fermer</button>
            <button type="submit">Soumettre</button>
        </div>
    </form>
</div>
<footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>
</body>
</html>