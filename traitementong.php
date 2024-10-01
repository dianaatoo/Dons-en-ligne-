<?php
// Connexion à la base de données
include_once "conn.php";

// Vérifier la connexion
if (!$con) {
    die("Erreur de connexion à la BD: " . mysqli_connect_error());
}

// Préparer la requête d'insertion
$stmt = $con->prepare("INSERT INTO ong (mission, objectif, nom, cigle, date_creation, type_contrat) VALUES (?, ?, ?, ?, ?, ?)");
$stm = $con->prepare("INSERT INTO donateur (statut, nom, prenom, adresse, mdp) VALUES (?, ?, ?, ?, ?)");
$stm->bind_param("sssss", $statut, $nom, $cigle, $email, $mdp);
// Lier les paramètres
$stmt->bind_param("ssssss", $mission, $objectif, $nom, $cigle, $date, $contrat);

// Définir les valeurs des paramètres
$mission = $_POST['mission'];
$objectif = $_POST['objectif'];
$nom = $_POST['nom'];
$cigle = $_POST['cigle'];
$date = $_POST['date'];
$contrat = $_POST['contrat'];
$email = $_POST['email'];
$mdp = $_POST['password'];
$statut="ong";

// Exécuter la requête
if ($stmt->execute() && $stm->execute()) {
    header("Location:indexe.php");
    echo json_encode(["message" => "Données insérées avec succès."]);
} else {
    echo " Erreur lors de l'insertion des données " ;
}

// Fermer la déclaration et la connexion
$stmt->close();
$con->close();
?>