<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Détails de l'Annonce</title>
</head>
<body>
<div class="container mt-5">
    <h1>Détails de l'Annonce</h1>

    <?php
    include_once "conn.php";
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $req = mysqli_query($con, "SELECT * FROM annone WHERE id = $id");

        if (mysqli_num_rows($req) > 0) {
            $row = mysqli_fetch_assoc($req);
            echo "<div class='card mb-3'>
                    <div class='card-body'>
                     <p class='card-text'><strong>Id:</strong> {$row['id']}</p>
                    <p class='card-text'><strong>Nom:</strong> {$row['nomA']}</p>
                 <p class='card-text'><strong>sigle:</strong> {$row['sigle']}</p>
                    <p class='card-text'><strong>Region:</strong> {$row['region']}</p>
                         <p class='card-text'><strong>departement:</strong> {$row['departement']}</p>
                         <p class='card-text'><strong>Arrondissement:</strong> {$row['arrondissement']}</p>
                          <p class='card-text'><strong>date de pubilacation:</strong> {$row['datep']}</p>
                         <p class='card-text'><strong>date limite:</strong> {$row['datel']}</p>
                         <p class='card-text'><strong>TITRE:</strong> {$row['titre']}</p>  
                     <p class='card-text'><strong>categorie:</strong> {$row['categorie']}</p>
                    <p class='card-text'><strong>description:</strong> {$row['description']}</p>  
                        <p class='card-text'>{$row['description']}</p> <!-- Ajoutez ici la description complète -->
                        <a href='afficheannonce.php' class='btn btn-primary'>Retour aux Annonces</a>
                        <a href='planificationetres.php' class='btn btn-primary'>Repondre à l'annonce</a>
                    </div>
                  </div>";
        } else {
            echo "<div class='alert alert-danger'>Annonce non trouvée.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Aucun ID d'annonce spécifié.</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>