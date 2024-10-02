<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier une ONG</title>
  <style>
    /* Styles généraux */
    body {
      font-family: times new roman;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }

    /* Container principal */
    .container {
      width: 50%;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    /* Titre */
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Formulaire */
    form {
      margin-top: 15px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"], input[type="date"] {
      width: 90%;
      height: 40px;
      margin-bottom: 15px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* Boutons */
    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 8px;
    }

    .button-container input[type="submit"], .button-container button[type="button"] {
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    .button-container input[type="submit"] {
      background-color: #87CEEB; /* Bleu ciel */
      color: #fff;
    }

    .button-container button[type="button"] {
      background-color: #fff; /* Blanc */
      color: #87CEEB; /* Bleu ciel */
      border: 1px solid #87CEEB;
    }

    .button-container input[type="submit"]:hover {
      background-color: #4682B4; /* Bleu foncé */
    }

    .button-container button[type="button"]:hover {
      background-color: #87CEEB; /* Bleu ciel */
      color: #fff;
    }
  </style>
</head>
<body>
  <?php
  include_once "conn.php";

  // Vérification de l'existence de 'idong' dans l'URL
  if (isset($_GET['idong'])) {
      $idong = $_GET['idong'];
      
      // Récupération des données de l'ONG
      $req = mysqli_query($con, "SELECT * FROM ong WHERE idong = $idong");
      $row = mysqli_fetch_assoc($req);
  }

  // Traitement du formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $mission = $_POST['mission'];
      $objectif = $_POST['objectif'];
      $nom = $_POST['nom'];
      $cigle = $_POST['cigle'];
      $date_creation = $_POST['date'];
      $type_contrat = $_POST['contrat'];
      $date_enregistrementO = $_POST['date_enregistrementO'];

      // Mise à jour de l'ONG
      $update_query = "UPDATE ong SET mission='$mission', objectif='$objectif', nom='$nom', cigle='$cigle', date_creation='$date_creation', type_contrat='$type_contrat', date_enregistrementO='$date_enregistrementO' WHERE idong=$idong";
      $update_result = mysqli_query($con, $update_query);

      if ($update_result) {
          header("Location: indexe.php");
          exit();
      } else {
          echo "<script>alert('ONG non modifiée');</script>";
      }
  }
  ?>
  
  <div class="container">
    <h1>Modifier une ONG</h1>
    <form method="POST" action="">
      <div>
        <label for="mission">Mission :</label>
        <input type="text" id="mission" name="mission" required value="<?= isset($row['mission']) ? $row['mission'] : ''; ?>">
      </div>
      <div>
        <label for="objectif">Objectif :</label>
        <input type="text" id="objectif" name="objectif" required value="<?= isset($row['objectif']) ? $row['objectif'] : ''; ?>">
      </div>
      <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required value="<?= isset($row['nom']) ? $row['nom'] : ''; ?>">
      </div>
      <div>
        <label for="cigle">Cigle :</label>
        <input type="text" id="cigle" name="cigle" required value="<?= isset($row['cigle']) ? $row['cigle'] : ''; ?>">
      </div>
      <div>
        <label for="date">Date de création :</label>
        <input type="date" id="date" name="date" required value="<?= isset($row['date_creation']) ? $row['date_creation'] : ''; ?>">
      </div>
      <div>
        <label for="contrat">Type de contrat :</label>
        <input type="text" id="contrat" name="contrat" required value="<?= isset($row['type_contrat']) ? $row['type_contrat'] : ''; ?>">
      </div>
      <div>
        <label for="date_enregistrementO">Date d'enregistrement :</label>
        <input type="text" id="date_enregistrementO" name="date_enregistrementO" required value="<?= isset($row['date_enregistrementO']) ? $row['date_enregistrementO'] : ''; ?>">
      </div>

      <div class="button-container">
        <button type="button" onclick="window.location.href='indexe.php'">Quitter</button>
        <input type="submit" value="Enregistrer">
      </div>
    </form>
  </div>
</body>
</html>