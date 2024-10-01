<?php
// Connexion à la base de données
include_once "conn.php";

// Vérifier la connexion
if (!$con) {
    die("Erreur de connexion à la BD: " . mysqli_connect_error());
}

// Préparer la requête d'insertion
$stmt = $con->prepare("INSERT INTO ong (mission, objectif, nom, cigle, date_creation, type_contrat) VALUES (?, ?, ?, ?, ?, ?)");

// Lier les paramètres
$stmt->bind_param("ssssss", $mission, $objectif, $nom, $cigle, $date, $contrat);

// Définir les valeurs des paramètres
$mission = $_POST['mission'];
$objectif = $_POST['objectif'];
$nom = $_POST['nom'];
$cigle = $_POST['cigle'];
$date = $_POST['date'];
$contrat = $_POST['contrat'];

// Exécuter la requête
if ($stmt->execute()) {
    echo json_encode(["message" => "Données insérées avec succès."]);
} else {
    echo json_encode(["error" => "Erreur lors de l'insertion des données : " . $stmt->error]);
}

// Fermer la déclaration et la connexion
$stmt->close();
$con->close();
?>