<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier une ONG</title>
  <style>
    /* Styles généraux */
    body {
      font-family: Arial, sans-serif;
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
  if (isset($_GET['idA'])) {
      $idA = $_GET['idA'];
      
      // Récupération des données de l'ONG
      $req = mysqli_query($con, "SELECT * FROM association WHERE idA = '$idA'");
      $row = mysqli_fetch_assoc($req);
  }

  // Traitement du formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $agreement = $_POST['agreement'];
      $nomA = $_POST['nomA'];
      $sigle = $_POST['sigle'];
      $region = $_POST['region'];
      $departement = $_POST['departement'];
      $arrondissement = $_POST['arrondissement'];
      $cible = $_POST['cible'];
      $nomR = $_POST['nomR'];
      $numero = $_POST['numero'];
      $date = $_POST['date'];
      $contrat = $_POST['contrat'];

      // Mise à jour de l'ONG
      $update_query = "UPDATE association SET agreement='$agreement',nomA='$nomA',sigle='$sigle', region='$region',departement='$departement',arrondissement='$arrondissement', cible='$cible', nomR='$nomR', numeroR='$numero', date='$date', contrat='$contrat' WHERE idA='$idA'";
      $update_result = mysqli_query($con, $update_query);

      if ($update_result) {
          header("Location: indexe.php");
          exit();
      } else {
          echo "<script>alert('Association non modifiée');</script>";
      }
  }
  ?>
  
  <div class="container">
    <h1>Modifier une ONG</h1>
    <form method="POST" action="">
      <div>
        <label for="agreement">agreement :</label>
        <input type="text" id="agreement" name="agreement" required value="<?= isset($row['agreement']) ? $row['agreement'] : ''; ?>">
      </div>
      <div>
        <label for=" nomAS"> nomAS :</label>
        <input type="text" id=" nomAS" name="nomA" required value="<?= isset($row['nomA']) ? $row['nomA'] : ''; ?>">
      </div>
      <div>
        <label for="cigleA">cigleA :</label>
        <input type="text" id="cigleA" name="sigle" required value="<?= isset($row['sigle']) ? $row['sigle'] : ''; ?>">
      </div>
      <div>
        <label for="region">region :</label>
        <input type="text" id="region" name="region" required value="<?= isset($row['region']) ? $row['region'] : ''; ?>">
      </div>
      <div>
        <label for="departement">departement :</label>
        <input type="departement" id="departement" name="departement" required value="<?= isset($row['departement']) ? $row['departement'] : ''; ?>">
      </div>
      <div>
        <label for="arrondissement">arrondissement :</label>
        <input type="text" id="arrondissement" name="arrondissement" required value="<?= isset($row['arrondissement']) ? $row['arrondissement'] : ''; ?>">
      </div>
      <div>
        <label for="cible">cible :</label>
        <input type="text" id="cible" name="cible" required value="<?= isset($row['cible']) ? $row['cible'] : ''; ?>">
      </div>
      <div>
        <label for=" nomR"> nomR :</label>
        <input type="text" id=" nomR" name="nomR" required value="<?= isset($row['nomR']) ? $row['nomR'] : ''; ?>">
      </div>
      <div>
        <label for="numero">numero :</label>
        <input type="text" id="numero" name="numero" required value="<?= isset($row['numeroR']) ? $row['numeroR'] : ''; ?>">
      </div>
      <div>
        <label for="date">date :</label>
        <input type="text" id="date" name="date" required value="<?= isset($row['date']) ? $row['date'] : ''; ?>">
      </div>
      <div>
        <label for="contrat">contrat :</label>
        <input type="text" id="contrat" name="contrat" required value="<?= isset($row['contrat']) ? $row['contrat'] : ''; ?>">
      </div>

      <div class="button-container">
        <button type="button" onclick="window.location.href='indexe.php'">Quitter</button>
        <input type="submit" value="Enregistrer">
      </div>
    </form>
  </div>
</body>
</html>