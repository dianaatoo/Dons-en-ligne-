<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<style>
		body {
			background-color: #ADD8E6; /* Bleu ciel */
			font-family: Arial, sans-serif;
		}
		
		main {
			background-color: white; /* Blanc */
			padding: 2em;
			border: 2px solid #4682B4; /* Bleu foncé */
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 80%;
			max-width: 500px;
			margin: 40px auto;
		}
		
		#connexion-form {
			display: none;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
		}
        h1{
        text-align:center;
        }
		
		input[type="text"], input[type="email"], input[type="password"],select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		
		input[type="submit"] {
			background-color: #4682B4; /* Bleu foncé */
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #5C7AEA; /* Bleu foncé clair */
		}
		a{
		text-decoration:none;
		color:blue;
	}
	</style>
</head>
<body>
<?php
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données
    $statut = $_POST['statut'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $cmdp = $_POST['cmdp'];

    // Vérification du compte
    $stmt = $con->prepare("SELECT adresse FROM donateur WHERE adresse = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérification des mots de passe
    if ($mdp != $cmdp) {
        echo "<script>alert('Le mot de passe ne correspond pas!');</script>";
    } else {
        if ($result->num_rows <= 0) {
            // Insertion dans la base de données
            $stmt = $con->prepare("INSERT INTO donateur (statut, nom, prenom, adresse, mdp) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $statut, $nom, $prenom, $email, $mdp);
            
            if ($stmt->execute()) {
				if($statut=='gestionnaire'){
                    header("Location:indexe.php");
				}
				elseif($statut=='benevole')
				{
					header("Location:benevole.php");
				}
			
				elseif($statut=='admin'){
					header("Location:admin.php");
				}
				
				elseif($statut=='bienfaiteur'){
					header("Location:Bienfaiteur.php");
				}
				else{
					echo "<script>alert('Aucun role introuvé');</script>";
				}

                echo "<script>alert('Enregistrement avec succès');</script>";
            } else {
                echo "<script>alert('Erreur lors de l\'enregistrement');</script>";
            }
        } else {
            echo "<script>alert('Ce compte existe déjà!');</script>";
        }
    }
    
    // Fermeture de la connexion
    $stmt->close();
    $con->close();
}
?>
	<main>
		<h1>INSCRIPTION</h1>
		<!-- ... -->
		<h2>Inscription</h2>
		<div id="inscription-form">
			<form method="POST" action="inscription.php">
				 <select id="statut" name="statut" required value="<?php echo($statut);?>">
            <option value="" disabled selected>Choisissez votre statut</option>
            <option value="bienfaiteur">Bienfaiteur</option>
            <option value="benevole">Benevole</option>
            <option value="admin">Admin</option>
			<option value="gestionnaire">Gestionnaire</option>
        </select>
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($nom);}?>"><br><br>
				<label for="prenom">Prénom :</label>
				<input type="text" id="prenom" name="prenom" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($prenom);}?>"><br><br>
				<label for="email">Adresse e-mail :</label>
				<input type="email" id="email" name="email" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($email);}?>"><br><br>
				<label for="mdp">Mot de passe :</label>
				<input type="password" id="mdp" name="mdp" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($mdp);}?>"><br><br>
				<label for="mdp"> Confirmer votre mot de passe :</label>
				<input type="password" id="cmdp" name="cmdp" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($cmdp);}?>"><br><br>
				<input type="submit" value="S'inscrire">
				<p>Avez-vous déjà un compte ? <a href="connexion.php">Se connecter</a></p>
			</form>
		</div>
		
	</main>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>
</html>
