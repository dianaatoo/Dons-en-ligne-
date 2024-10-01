<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Créer une ONG</title>

<style>

.container {

max-width: 600px;

margin: 40px auto;

padding: 20px;

background-color: #f9f9f9;

border: 1px solid #ddd;

border-radius: 10px;

box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

form {

margin: 0;

padding: 0;

}

h1 {

text-align: center;

margin-bottom: 20px;

color: #87CEEB;

}

form div {

margin-bottom: 20px;

}

label {

display: block;

margin-bottom: 10px;

font-weight: bold;

color: #666;

}

input[type="text"],

input[type="date"] {

width: 98%;

padding: 10px;

margin-bottom: 20px;

border: 1px solid #ccc;

border-radius: 5px;

}

input[type="submit"] {

background-color: #87CEEB; /* Bleu ciel */

color: #fff;

padding: 10px 20px;

border: none;

border-radius: 5px;

cursor: pointer;

width: 100%;

}

input[type="submit"]:hover {

background-color: #4682B4; /* Bleu foncé */

}

/* Responsive */

@media (max-width: 768px) {

.container {

margin: 20px auto;

}

}

@media (max-width: 480px) {

.container {

padding: 10px;

}

input[type="text"],

input[type="date"] {

padding: 5px;

}

}

</style>

</head>

<body>

<div class="container">

<form method="POST" action="traitementas.php">

<h1>Créer une Association</h1>

<div>

<div>

<label for="numero_agreement">Email :</label>

<input type="email" id="agreement" name="email" required>

</div>

<div>

<label for="numero_agreement">Mot De Passe :</label>

<input type="password" id="agreement" name="password" required>

</div>


<div>

<label for="numero_agreement">Numeron d'agreement :</label>

<input type="text" id="agreement" name="agreement" required>

</div>

<div>

<label for="nomAS">Nom de l'association :</label>

<input type="text" id="nomA" name="nomA" required>

</div>

<div>

<label for="cigleA">Cigle :</label>

<input type="text" id="cigleA" name="sigle" required>

</div>

<div>

<label for="region">region :</label>
<select name="region" required>
                <option value="Sud">Sud</option>
                <option value="Centre">Centre</option>
                <option value="Est">Est</option>
                <option value="Ouest">Ouest</option>
                <option value="Littoral">Littoral</option>
                <option value="Adamaoua">Adamaoua</option>
                <option value="Extreme-nord">Extreme-nord</option>
                <option value="Nord-ouest">Nord-ouest</option>
                <option value="Sud-ouest">Sud-ouest</option>
                <option value="Nord">Nord</option>
            </select>
</div>
<div>

<label for="departement">departement:</label>

<input type="text" id="departement" name="departement" required>

</div>

<div>

<label for="arrondissement">arrondissement :</label>

<input type="text" id="arrondissement" name="arrondissement" required>

</div>

<div>

<label for="cible">cible :</label>
<select name="cible" required>
                <option value="Les personnes âgées ">Les personnes âgées</option>
                <option value="Les personnes handicapées">Les personnes handicapées</option>
                <option value="Les familles monoparentales">Les familles monoparentales</option>
                <option value="Les personnes sans abri">Les personnes sans abri</option>
                <option value="Les réfugiés">Les réfugiés</option>
                <option value="Les orphelins">Les orphelins</option>
                <option value="Les personnes victimes de violence ou d'exploitation">Les personnes victimes de violence ou d'exploitation</option>
                <option value="enfants_de_rue">Les enfants de la rue</option>
            </select>
</div>

<div>

<label for="nomR">Nom du responsable :</label>

<input type="text" id="nomR" name="nomR" required>

</div>

<div>

<label for="numero">Numero du responsable :</label>

<input type="text" id="numero" name="numero" required>

</div>

<div>

<label for="date">Date_creation :</label>

<input type="date" id="date" name="date" required>

</div>

<div>

<label for="contrat">Type_contrat :</label>

<input type="text" id="contrat" name="contrat" required>

</div>

<input type="submit" value="Enregistrer">

</div>

</form>

</div>

</body>

</html>