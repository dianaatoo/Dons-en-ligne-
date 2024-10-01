<?php
  include_once "conn.php";

  // Vérification de l'existence de 'idong' dans l'URL
  if (isset($_GET['id'])) {
      $id = $_GET['id'];
      
      // Récupération des données de l'ONG
      $req = mysqli_query($con, "SELECT statut FROM annone WHERE id = $id");
      $row = mysqli_fetch_assoc($req);
  }
      // Mise à jour de l'ONG
      $statut="accepter";
      $update_query = "UPDATE association SET  statut='$statut' WHERE id=$id";
      $update_result = mysqli_query($con, $update_query);

      if ($update_result) {
          header("Location: indexe.php");
          exit();
      } else {
          echo "<script>alert('Association non modifiée');</script>";
      }
  
  ?>