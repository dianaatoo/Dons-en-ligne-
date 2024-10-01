<?php

    // Connexion à la base de données
    include_once"conn.php";
    
    // Vérifier la connexion
    if (!$con) {
        die("Erreur de connexion à la BD: " . mysqli_connect_error());
    }
    
    // Préparer la requête d'insertion
    $stmt = $con->prepare("INSERT INTO association (agreement, nomA, sigle, region, departement, arrondissement, cible, nomR, numeroR, date, contrat,email,password) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Lier les paramètres
    $stmt->bind_param("sssssssssssss", $agreement, $nomA, $sigle, $region, $departement, $arrondissement, $cible, $nomR, $numeroR, $date, $contrat,$email,$pwd);
    
    // Définir les valeurs des paramètres
    $agreement = $_POST['agreement'];
    $nomA = $_POST['nomA'];
    $sigle = $_POST['sigle'];
    $region = $_POST['region'];
    $departement = $_POST['departement'];
    $arrondissement = $_POST['arrondissement'];
    $cible = $_POST['cible'];
    $nomR = $_POST['nomR'];
    $numeroR = $_POST['numero'];
    $date = $_POST['date'];
    $contrat = $_POST['contrat'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    
    // Exécuter la requête
    if ($stmt->execute()) {
        header("Location:indexe.php");
        echo "Données insérées avec succès.";
    } else {
        echo json_encode(["error" => "Erreur lors de l'insertion des données : " . $stmt->error]);
    }
    
    // Fermer la déclaration et la connexion
    $stmt->close();
    $con->close();
    ?>