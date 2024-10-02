<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    	body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
        }
    </style>
    
</head>
<body> 
<div class="contenu">
    
    <header class="entête">
        <div>
            <span id="titreOnglet">Tableau de Bord</span>
            <div class="profil">
                <i class="fa fa-user-circle icône-profil"></i>
                <span>Gestionnaire</span>
            </div>
        </div>
    </header>
    <main>
        <aside>
        <nav id="sidebar">
    <div class="liste-sidbar">
        <a href="#" onclick="montrerOnglet('tableauDeBord', 'Tableau de Bord')"><span class='champ-icône'><i class="fa fa-tachometer-alt"></i></span> Tableau de Bord</a>
        <a href="#" onclick="montrerOnglet('annonces', '')"><span class='champ-icône'><i class="fa fa-bullhorn"></i></span> Liste des Annonces</a>    
        <a href="#" onclick="montrerOnglet('associations', 'Liste des Associations')"><span class='champ-icône'><i class="fa fa-building"></i></span> Gestion des Associations</a>    
        <a href="#" onclick="montrerOnglet('dons', '')"><span class='champ-icône'><i class="fa fa-gift"></i></span> Suivi des Dons</a>
        <a href="#" onclick="montrerOnglet('ong', 'Gestion des ONG')"><span class='champ-icône'><i class="fa fa-users"></i></span> Gestion des ONG</a>
    </div>
</nav>

        </aside>
        <section>
            
    <div id="tableauDeBord" class="onglet actif">
        
        <div class="statistiques">
            <div class="statistique">
                <h2><?php
    include_once "conn.php";
    
    // Préparer la requête SQL
    $stmt = $con->prepare("SELECT COUNT(id) FROM annone WHERE statut ='accepter'");
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer le résultat
    $stmt->bind_result($count);
    $stmt->fetch();
    
    // Afficher le résultat
    echo "" . $count;

    // Fermer la requête
    $stmt->close();
?>
</h2>
                <p>Annonces Actives</p>
            </div>
            <div class="statistique1">
                <h2><?php
    include_once "conn.php";
    
    // Préparer la requête SQL
    $stmt = $con->prepare("SELECT COUNT(idA) FROM association");
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer le résultat
    $stmt->bind_result($count);
    $stmt->fetch();
    
    // Afficher le résultat
    echo "" . $count;

    // Fermer la requête
    $stmt->close();
?></h2>
                <p>Associations</p>
            </div>
            <div class="statistique2">
                <h2>
                <?php
    include_once "conn.php";
    
    // Préparer la requête SQL
    $stmt = $con->prepare("SELECT COUNT(idd) FROM dons");
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer le résultat
    $stmt->bind_result($count);
    $stmt->fetch();
    
    // Afficher le résultat
    echo "" . $count;

    // Fermer la requête
    $stmt->close();
?>

                </h2>
                <p>Dons Recueillis</p>
            </div>
            <div class="statistique3">
                <h2>
                    <?php
    include_once "conn.php";
    
    // Préparer la requête SQL
    $stmt = $con->prepare("SELECT COUNT(idong) FROM ong");
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer le résultat
    $stmt->bind_result($count);
    $stmt->fetch();
    
    // Afficher le résultat
    echo "" . $count;

    // Fermer la requête
    $stmt->close();
?>

                </h2>
                <p>ONG</p>
            </div>
        </div>
        
    </div>

    <div id="annonces" class="onglet">
    <!-- Contenu des annonces -->
    <div class="tableau-annonces">
    <h3>Liste des Annonces</h3>
    <table border="">
    	<thead>
    		<tr>
                <th>Id</th>
                
                <th>NomA</th>
                <th>Region</th>
                <th>Sigle</th>
                <th>Departementn</th>
                <th>Arrondissement</th>
                <th>Date</th>
                <th>Zone</th>
                <th>Cible</th>
                <th>Categorie</th>
                <th>dateE</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
include_once"conn.php";
$req=mysqli_query($con ,"SELECT * FROM annone");
if(mysqli_num_rows($req)==0){
   // echo"Aucune annonce";
}
else{
    while($row=mysqli_fetch_assoc($req)){
        ?>
          <tr>
            <td><?=$row['id']?></td>
            
        		<td><?=$row['nomA']?></td>
                <td><?=$row['region']?></td>
               <td><?=$row['sigle']?></td>
               <td><?=$row['departement']?></td>
               <td><?=$row['arrondissement']?></td>
               <td><?=$row['datel']?></td>
               <td><?=$row['zone']?></td>
               <td><?=$row['titre']?></td>
               <td><?=$row['categorie']?></td>
               <td><?=$row['datep']?></td>
               <td><?=$row['description']?></td>
               <td><?=$row['statut']?></td>
               <td><a href ="statutannonce.php?id=<?=$row ['id']?>" class="bm"> Accepter </a> </td>
               
        </tr>  <?php

    }
}
?>
    </table>
	</div>

    </div>


    <div id="associations" class="onglet">

    <div class="tableau-annonces">
    <h3></h3>
    <a class="bmm" href="creerA.php">Nouvelle association</a>
    <table border="">
    	<thead>
    		<tr>
                <th>Id</th>
                <th>Numéro d'agrement</th>
                <th>Nom de l'association</th>
                <th>Sigle de l'association</th>
                <th>region</th>
                <th>departement</th>
                <th>arrondissement</th>
                <th>cible</th>
                <th>nomR</th>
                <th>numeroR</th>
                <th>date</th>
                <th>contrat</th>
            </tr>
        </thead>
            <?php
include_once"conn.php";
$req=mysqli_query($con ,"SELECT * FROM association");
if(mysqli_num_rows($req)==0){
    echo"Aucune association";
}
else{
    while($row=mysqli_fetch_assoc($req)){
        ?>
          <tr>
            <td><?=$row['idA']?></td>
            	<td><?=$row['agreement']?></td>
        		<td><?=$row['nomA']?></td>
                <td><?=$row['region']?></td>
               <td><?=$row['sigle']?></td>
               <td><?=$row['departement']?></td>
               <td><?=$row['arrondissement']?></td>
               <td><?=$row['cible']?></td>
               <td><?=$row['nomR']?></td>
               <td><?=$row['numeroR']?></td>
               <td><?=$row['date']?></td>
               <td><?=$row['contrat']?></td>
               <td><a href ="modifierA.php?idA=<?=$row ['idA']?>" class="bm"> Modifier </a> </td>
                <td><a href ="supprimerA.php?idA=<?=$row ['idA']?>" class="bm"> Supprimer </a> </td>
        </tr> <?php

    }
}
?>

        </tbody>
    </table>
	</div>

    </div>

    <div id="dons" class="onglet">

    <div class="tableau-annonces">
    <h3>Listes des Dons</h3>
    <table border="">
    	<thead>
    		<tr>
                <th>Id</th>
                <th>Nom-Association</th>
                <th>Sigle</th>
                <th>cible</th>
                <th>region</th>
                <th>Departemet</th>
                <th>Arrondissement</th>
                <th>Type-ressources</th>
                <th>Type-ressources</th>
                <th>Type-ressources</th>
                <th>Quantite</th>
                <th>Quantite</th>
                <th>Quantite</th>
                <th>Nom-Ressource</th>
                <th>Nom-Ressource</th>
                <th>Nom-Ressource</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Nombre de personne</th>
                
            
            </tr>
        </thead>

        <tbody>
   
        <?php
include_once"conn.php";
$req=mysqli_query($con ,"SELECT * FROM dons");
if(mysqli_num_rows($req)==0){
    echo"Aucune association";
}
else{
    while($row=mysqli_fetch_assoc($req)){
        ?>
          <tr>
            <td><?=$row['idd']?></td>
            	<td><?=$row['nom_association']?></td>
        		<td><?=$row['sigle']?></td>
               <td><?=$row['cible']?></td>
               <td><?=$row['region']?></td>
               <td><?=$row['departement']?></td>
               <td><?=$row['arrondissement']?></td>
               <td><?=$row['type_ressource1']?></td>
               <td><?=$row['type_ressource2']?></td>
               <td><?=$row['type_ressource3']?></td>
               <td><?=$row['quantite1']?></td>
               <td><?=$row['quantite2']?></td>
               <td><?=$row['quantite3']?></td>
               <td><?=$row['nom_ressource1']?></td>
               <td><?=$row['nom_ressource2']?></td>
               <td><?=$row['nom_ressource3']?></td>
               <td><?=$row['date']?></td>
               <td><?=$row['heure']?></td>
               <td><?=$row['nombre_personnes']?></td>
               
        </tr> <?php

    }
}
?>

        </tbody>
    </table>
	</div>

    </div>

    <div id="ong" class="onglet">
    <div class="tableau-annonces">
    <h3></h3>
    <a class="bmm" href="creer.php">Ajouter une ONG</a>
    <table border="">
    	<thead>
    		<tr>
                <th>Id</th>
                <th>Mission</th>
                <th>Objectif</th>
                <th>nom</th>
                <th>cigle</th>
                <th>date_creation</th>
                <th>type_contrat</th>
                <th>date_enregistrementO</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
     
        <tbody>
<?php
include_once"conn.php";
$req=mysqli_query($con ,"SELECT * FROM ong");
if(mysqli_num_rows($req)==0){
    echo"Aucune ong";
}
else{
    while($row=mysqli_fetch_assoc($req)){
        ?>
          <tr>
            <td><?=$row['idong']?></td>
            	<td><?=$row['mission']?></td>
        		<td><?=$row['objectif']?></td>
               <td><?=$row['nom']?></td>
               <td><?=$row['cigle']?></td>
               <td><?=$row['date_creation']?></td>
               <td><?=$row['type_contrat']?></td>
               <td><?=$row['date_enregistrementO']?></td>
                <td><a href ="modifier.php?idong=<?=$row ['idong']?>" class="bm"> Modifier </a> </td>
                <td><a href ="supprimer.php?idong=<?=$row ['idong']?>" class="bm"> Supprimer </a> </td>
        </tr> <?php

    }
}
?>
          
        </tbody>

    </table>
	</div>
            
        </section>
    </main>


        
    
</div>

<script>
    function montrerOnglet(ongletId, titre) {
        // Masquer tous les onglets
        const onglets = document.querySelectorAll('.onglet');
        onglets.forEach(onglet => onglet.classList.remove('actif'));

        // Montrer l'onglet sélectionné
        document.getElementById(ongletId).classList.add('actif');

        // Mettre à jour le titre de l'onglet
        document.getElementById('titreOnglet').innerText = titre;
    }
</script>

</body>
</html>