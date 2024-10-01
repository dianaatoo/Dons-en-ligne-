<?php
  include_once "conn.php";

  // Vérification de l'existence de 'id' dans l'URL
  if (isset($_GET['id'])) {
      // Sécurisation de l'entrée pour éviter les injections SQL
      $id = intval($_GET['id']);
      
      // Récupération du statut de l'ONG
      $req = mysqli_prepare($con, "SELECT statut FROM annone WHERE id = ?");
      mysqli_stmt_bind_param($req, 'i', $id);
      mysqli_stmt_execute($req);
      $result = mysqli_stmt_get_result($req);
      
      if ($row = mysqli_fetch_assoc($result)) {
          // Mise à jour du statut de l'ONG
          $statut = "accepter";
          $update_query = mysqli_prepare($con, "UPDATE annone SET statut = ? WHERE id = ?");
          mysqli_stmt_bind_param($update_query, 'si', $statut, $id);
          $update_result = mysqli_stmt_execute($update_query);

          if ($update_result) {
              // Redirection en cas de succès
              header("Location: indexe.php");
              exit();
          } else {
              // Gestion de l'échec de la mise à jour
              echo "<script>alert('Association non modifiée');</script>";
          }
      } else {
          echo "<script>alert('Aucune association trouvée avec cet ID');</script>";
      }
  } else {
      echo "<script>alert('ID manquant dans l\'URL');</script>";
  }
?>
