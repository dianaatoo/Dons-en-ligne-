<?php
    include_once"conn.php";
// Récupération des données
    $nomA = $_POST['nomA'];
    $sigle = $_POST['sigle'];
    $region = $_POST['region'];
    $departement = $_POST['departement'];
    $arrondissement = $_POST['arrondissement'];
    $zone = $_POST['zone'];
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
    $datel = $_POST['datel'];

    // Insertion dans la base de données
    $requette = "INSERT INTO annone (nomA, sigle, region, departement, arrondissement, zonea, titre, categorie, descriptions, datel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Préparation de la requête
    $stmt = mysqli_prepare($con, $requette);
    mysqli_stmt_bind_param($stmt, "ssssssssss", $nomA, $sigle, $region, $departement, $arrondissement, $zone, $titre, $categorie, $description,  $datel);
    
    // Exécution de la requête
    if (mysqli_stmt_execute($stmt)) {
        // Message de succès
        echo "<p style='color: green;'>Enregistrement réussi!</p>";
    } else {
        // Message d'erreur
        echo "<p style='color: red;'>Erreur: " . mysqli_error($con) . "</p>";
    }
    // Fermeture de la connexion
    mysqli_stmt_close($stmt);
    mysqli_close($con);

?>