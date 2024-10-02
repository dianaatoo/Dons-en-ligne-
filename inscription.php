<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<style>
		body {
			background-color: white; /* Bleu ciel */
			font-family: times new roman;
            background-image:url(guyt.jpg);
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
</body>
</html>
