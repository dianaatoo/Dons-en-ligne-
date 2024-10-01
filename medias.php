<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Télécharger et Voir les Médias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="file"],
        textarea {
            display: block;
            margin: 10px 0;
        }
        button {
            margin-top: 10px;
        }
        #message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        #medias img {
            width: 200px;
            height: 150px;
            margin: 10px;
            border: 1px solid #ccc;
        }
        #medias p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Télécharger et Voir les Médias</h1>
    <div id="message"></div>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required>
        <textarea name="note" placeholder="Ajoutez une note..." required></textarea>
        <button type="submit" name="telecharger">Télécharger</button>
    </form>

    <h2>Médias Téléchargés</h2>
    <div id="media">
        <?php
        include_once "conn.php"; // Inclure le fichier de connexion à la base de données

        // Gestion du téléchargement de fichiers
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["telecharger"])) {
            $photo = $_FILES["photo"];
            $nom_photo = basename($photo["name"]);
            $chemin_photo = "media/" . $nom_photo;

            if (move_uploaded_file($photo["tmp_name"], $chemin_photo)) {
                $note = mysqli_real_escape_string($con, $_POST["note"]);
                $sql = "INSERT INTO media (nom, chemin, note) VALUES ('$nom_photo', '$chemin_photo', '$note')";
                if (mysqli_query($con, $sql)) {
                    echo "<script>document.getElementById('message').innerHTML = '<p class=\"success\">Photo téléchargée avec succès.</p>';</script>";
                } else {
                    echo "<script>document.getElementById('message').innerHTML = '<p class=\"error\">Erreur lors de l\'enregistrement dans la base de données.</p>';</script>";
                }
            } else {
                echo "<script>document.getElementById('message').innerHTML = '<p class=\"error\">Erreur lors du téléchargement du fichier.</p>';</script>";
            }
        }

        // Récupération des médias
        $sql = "SELECT * FROM media";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<img src='" . $row['chemin'] . "' alt='" . $row['nom'] . "'>";
                echo "<p>" . $row['note'] . "</p>";
            }
        } else {
            echo "<p>Aucun média trouvé.</p>";
        }

        mysqli_close($con); // Fermer la connexion
        ?>
    </div>
</body>
</html>