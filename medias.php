<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img {
            max-width: 100%; /* Assurer la responsivité */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h4 class="text-center">Images Partagées</h4>

        <?php
        $uploadDir = 'uploads/'; // Dossier où vous souhaitez enregistrer l'image

        // Vérifier si le dossier existe, sinon le créer
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Récupération des images
        $images = glob($uploadDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Récupère toutes les images

        // Gestion des téléchargements
        $message = ''; // Variable pour le message de statut
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
            // Vérifiez si un fichier a été téléchargé sans erreur
            if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $uploadFile = $uploadDir . basename($_FILES['image']['name']);
                
                // Déplacez le fichier téléchargé vers le dossier d'uploads
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    // Rediriger vers la page d'origine avec un message de succès
                    header("Location: bienfaiteur.php?success=1");
                    exit; // Toujours appeler exit après header
                } else {
                    $message = 'Erreur lors de l\'upload de l\'image.';
                }
            } else {
                $message = 'Erreur dans le téléchargement de l\'image.';
            }
        }
        ?>

        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (!empty($images)): ?>
                    <?php foreach ($images as $index => $image): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo htmlspecialchars($image); ?>" class="d-block w-100" alt="Image">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="carousel-item active">
                        <img src="placeholder.jpg" class="d-block w-100" alt="Aucune image partagée.">
                    </div>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>