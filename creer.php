
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

<form method="POST" action="creation_ong.php">

<h1>Créer une ONG</h1>

<div>

<div>

<label for="mission">Mission :</label>

<input type="text" id="mission" name="mission" required>

</div>

<div>

<label for="objectif">Objectif :</label>

<input type="text" id="objectif" name="objectif" required>

</div>
<div>

<label for="nom">Nom :</label>

<input type="text" id="non" name="nom" required>

</div>

<div>

<label for="cigle">Cigle :</label>

<input type="text" id="cigle" name="cigle" required>

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