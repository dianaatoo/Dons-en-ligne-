<?php
include_once 'conn.php'; // Inclure la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations de l'association
    $nom_association = $_POST['nom-association'];
    $sigle = $_POST['sigle'];
    $cible = $_POST['cible'];
    $region = $_POST['region'];
    $departement = $_POST['departement'];
    $arrondissement = $_POST['arrondissement'];

    // Récupérer les ressources (avec vérification des indices)
    $type_ressource1 = isset($_POST['type-ressource'][0]) ? $_POST['type-ressource'][0] : null;
    $quantite1 = isset($_POST['quantite'][0]) ? $_POST['quantite'][0] : null;
    $nom_ressource1 = isset($_POST['nom-ressource'][0]) ? $_POST['nom-ressource'][0] : null;

    $type_ressource2 = isset($_POST['type-ressource'][1]) ? $_POST['type-ressource'][1] : null;
    $quantite2 = isset($_POST['quantite'][1]) ? $_POST['quantite'][1] : null;
    $nom_ressource2 = isset($_POST['nom-ressource'][1]) ? $_POST['nom-ressource'][1] : null;

    $type_ressource3 = isset($_POST['type-ressource'][2]) ? $_POST['type-ressource'][2] : null;
    $quantite3 = isset($_POST['quantite'][2]) ? $_POST['quantite'][2] : null;
    $nom_ressource3 = isset($_POST['nom-ressource'][2]) ? $_POST['nom-ressource'][2] : null;

    // Récupérer la planification
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $nombre_personnes = $_POST['nombre-personnes'];

    // Préparer la requête d'insertion
    $stmt = $con->prepare("INSERT INTO dons 
        (nom_association, sigle, cible, region, departement, arrondissement, 
        type_ressource1, type_ressource2, type_ressource3, 
        quantite1, quantite2, quantite3, 
        nom_ressource1, nom_ressource2, nom_ressource3, 
        date, heure, nombre_personnes) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Associer les paramètres de la requête
    $stmt->bind_param("sssssssssssssssisi", 
        $nom_association, $sigle, $cible, $region, $departement, $arrondissement,
        $type_ressource1, $type_ressource2, $type_ressource3,
        $quantite1, $quantite2, $quantite3,
        $nom_ressource1, $nom_ressource2, $nom_ressource3,
        $date, $heure, $nombre_personnes);

    // Exécuter la requête et vérifier si elle a réussi
    if ($stmt->execute()) {
        header("Locationindexe.php");
        echo "Le don a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du don: " . $con->error;
    }

    // Fermer la requête
    $stmt->close();
}

// Fermer la connexion à la base de données
$con->close();
?>
