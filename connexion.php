<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-login {
            background-color: #28a745;
            color: white;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "conn.php";

    // Récupération des données
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparation de la requête pour vérifier les identifiants
    $stmt = $con->prepare("SELECT statut FROM donateur WHERE adresse = ? AND mdp = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows <= 0) {
        echo "<script>alert('Aucun compte trouvé');</script>";
    } else {
        // Récupération du statut
        $user = $result->fetch_assoc();
        $statut = $user['statut'];

        // Redirection en fonction du statut
        if ($statut == 'admin') {
            header("Location: admin.php");
            exit();
        } elseif ($statut == 'gestionnaire') {
            header("Location: indexe.php");
            exit();
        } elseif ($statut == 'bienfateur') {
            header("Location: bienfaiteur.php");
            exit();
        } elseif ($statut == 'benevole') {
            header("Location: benevole.php");
            exit();
        } else {
            echo "<script>alert('Statut inconnu');</script>";
        }
    }

    // Fermeture de la déclaration et de la connexion
    $stmt->close();
    $con->close();
}
?>
<div class="container">
    <h2>Connexion Donateur/Benevole</h2>
    <form action="connexion.php" method="POST">
           <label for="email">email:</label>
        <input type="email" id="email" name="email" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($email);}?>">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required value="<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {echo($password);}?>">
        <input type="reset" class="btn-cancel" onclick="window.location.href='index.php'" value="Annuler">
        <input type="submit" class="btn-login" value="Se connecter"> 
    </form>
</div>
</body>
</html>