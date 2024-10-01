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
                    include_once"conn.php";
                    $stmt = $con->prepare("SELECT COUNT (id) FROM association");
                    $stmt->bind_param("s", $id);
                    $stmt->execute();
                    ?></h2>
                <p>Annonces Actives</p>
            </div>
            <div class="statistique1">
                <h2>45</h2>
                <p>Associations</p>
            </div>
            <div class="statistique2">
                <h2>
                <?php
                    include_once"conn.php";
                    $stmt = $con->prepare("SELECT COUNT (idA) FROM association ");
                    $stmt->bind_param("s", $idA);
                    $stmt->execute();
                    ?>
                </h2>
                <p>Dons Recueillis</p>
            </div>
            <div class="statistique3">
                <h2>
                    <?php
                    include_once"conn.php";
                    $stmt = $con->prepare("SELECT COUNT (idiong) FROM ong ");
                    $stmt->bind_param("s", $idong);
                    $stmt->execute();
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
                <th>agreement </th>
                <th>NomA</th>
                <th>Sigle</th>
                <th>Region</th>
                <th>DEpartementn</th>
                <th>Arrondissement</th>
                <th>cible</th>
                <th>numeroR</th>
                <th>date</th>
                <th>contrat</th>
                <th>dateE</th>
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
               <td><?=$row['Sigle']?></td>
               <td><?=$row['region']?></td>
               <td><?=$row['departement']?></td>
               <td><?=$row['arrondissement']?></td>
               <td><?=$row['zone']?></td>
               <td><?=$row['datep']?></td>
               <td><?=$row['datel']?></td>
               <td><?=$row['titre']?></td>
               <td><?=$row['categorie']?></td>
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
        		<td><?=$row['nomAS']?></td>
               <td><?=$row['cigleA']?></td>
               <td><?=$row['region']?></td>
               <td><?=$row['departement']?></td>
               <td><?=$row['arrondissement']?></td>
               <td><?=$row['cible']?></td>
               <td><?=$row['nomR']?></td>
               <td><?=$row['numero']?></td>
               <td><?=$row['date']?></td>
               <td><?=$row['contrat']?></td>
               <td><a href ="modifierA.php?idong=<?=$row ['idong']?>" class="bm"> Modifier </a> </td>
                <td><a href ="supprimerA.php?idong=<?=$row ['idong']?>" class="bm"> Supprimer </a> </td>
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
                <th>Type de ressource</th>
                <th>Nom de la ressource</th>
                <th>Qantité</th>
                	<th>Date</th>
                	<th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        	<tr>
        		<td>1</td>
        		<td>Vetement</td>
                <td>Chaussure</td>
                <td>15</td>
                <td>01/02/2024</td>
                <td class="accepter">Accepter</td>
                <td><a class="bm" >Modifier</a>
                	<a class="bs" >Supprimer</a></td>
            </tr>
            <tr>
            	<td>2</td>
        		<td>Nouriture</td>
                <td>Bannane</td>
                <td>120</td>
               <td>01/02/2024</td>
                <td class="rejeter">Rejeter</td>
                <td><a class="bm" >Modifier</a>
                	<a class="bs" >Supprimer</a></td>
            </tr>

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