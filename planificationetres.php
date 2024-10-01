<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Planification de don</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #FFFFFF; /* Fond blanc pour le conteneur */
            padding: 20px;
            border-radius: 8px;
        }
        
        .ressources-block,
        .association-info,
        .planification-block {
            background-color: #FFFFFF; /* Blanc */
            padding: 20px;
            border: 1px solid #87CEEB; /* Bleu ciel */
            margin-bottom: 20px;
            border-radius: 8px;
        }

        #ressources-table {
            width: 100%;
            border-collapse: collapse;
            overflow-x: auto; /* En cas de débordement */
            display: block; /* Permet le défilement horizontal */
            margin: 0 auto; /* Centre le tableau */
        }

        #ressources-table thead {
            background-color: #ADD8E6; /* Bleu ciel pour les en-têtes */
        }

        #ressources-table th, #ressources-table td {
            border: 1px solid #87CEEB;
            padding: 10px;
            text-align: center; /* Centre le texte dans les cellules */
        }

        button {
            background-color: #ADD8E6; /* Bleu ciel pour les boutons */
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #87CEEB; /* Couleur au survol des boutons */
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="url"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #87CEEB;
            border-radius: 4px;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Styles pour le tableau de ressources */
        @media (max-width: 768px) {
            #ressources-table {
                display: block; /* Permet le défilement horizontal sur petits écrans */
                overflow-x: auto;
            }
            #ressources-table th, #ressources-table td {
                white-space: nowrap; /* Évite que le texte se déplace à la ligne */
            }
        }
    </style>
   <script>
    let rowCount = 1; // On commence avec une ligne existante

    function fetchAssociationDetails() {
        const nomAssociation = document.getElementById('nom-association').value;

        if (nomAssociation) {
            fetch('fetch_association.php?nom=' + encodeURIComponent(nomAssociation))
                .then(response => response.json())
                .then(data => {
                    if (data) {
                        document.getElementById('description-association').value = data.description;
                        document.getElementById('contact-association').value = data.contact;
                        document.getElementById('site-web-association').value = data.site_web;
                    } else {
                        document.getElementById('description-association').value = '';
                        document.getElementById('contact-association').value = '';
                        document.getElementById('site-web-association').value = '';
                    }
                })
                .catch(error => console.error('Erreur:', error));
        }
    }

    function addRow() {
        if (rowCount < 3) {
            var table = document.getElementById("ressources-table").getElementsByTagName('tbody')[0];
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);

            cell1.innerHTML = `
                <select name="type-ressource[]">
                    <option value="vêtements">Vêtements</option>
                    <option value="nourriture">Nourriture</option>
                    <option value="médicaments">Médicaments</option>
                    <option value="scolaire">Scolaire</option>
                    <option value="matériels">Matériels</option>
                    <option value="logement">Logement</option>
                    <option value="autres">Autres</option>
                </select>
                <input type="text" name="autres-ressources[]" placeholder="Précisez le type de ressource" style="display:none;">
            `;
            cell2.innerHTML = `<div class="input-container"><input type="number" name="quantite[]" min="1" required></div>`;
            cell3.innerHTML = `<div class="input-container"><input type="text" name="nom-ressource[]" required></div>`;
            cell4.innerHTML = `
                <button type="button" onclick="deleteRow(this)">Supprimer</button>
            `;

            rowCount++;
        } else {
            alert("Vous ne pouvez ajouter que 3 lignes.");
        }
    }
    
    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
        rowCount--;
    }
</script>
</head>
<body>
<div class="container">
    <div class="association-info">
        <h2>Informations sur l'Association</h2>
        <form id="association-form" action="traitementres.php" method="POST">
            <label for="nom-association">Nom de l'Association :</label>
            <input type="text" id="nom-association" name="nom-association" onblur="fetchAssociationDetails()" placeholder="Saisissez le nom de l'association" required>
            
            <label for="description-association">Sigle :</label>
            <textarea id="description-association" name="sigle" rows="4"></textarea>
            
            <label for="contact-association">Cible  :</label>
            <input type="text" id="contact-association" name="cible">
            
            <label for="site-web-association">region :</label>
            <input type="text" id="site-web-association" name="region">
            <label for="site-web-association">departement :</label>
            <input type="text" id="site-web-association" name="departement">
            <label for="site-web-association">arrondissement :</label>
            <input type="text" id="site-web-association" name="arrondissement">
        
    </div>

    <div class="ressources-block">
        <h2>Ressources disponibles</h2>
        <div style="overflow-x: auto;">
            <table id="ressources-table">
                <thead>
                    <tr>
                        <th>Type de ressource</th>
                        <th>Quantité</th>
                        <th>Nom de la ressource</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="type-ressource[]">
                                <option value="vêtements">Vêtements</option>
                                <option value="nourriture">Nourriture</option>
                                <option value="médicaments">Médicaments</option>
                                <option value="scolaire">Scolaire</option>
                                <option value="matériels">Matériels</option>
                                <option value="logement">Logement</option>
                                <option value="autres">Autres</option>
                            </select>
                            <input type="text" name="autres-ressources[]" placeholder="Précisez le type de ressource" style="display:none;">
                        </td>
                        <td><div class="input-container"><input type="number" name="quantite[]" min="1" required></div></td>
                        <td><div class="input-container"><input type="text" name="nom-ressource[]" required></div></td>
                        <td>
                            <button type="button" onclick="addRow()">Ajouter</button>
                            <button type="button" onclick="deleteRow(this)">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

        <div class="planification-block">
            <h2>Planification de remise de don</h2>
        
                <label>Date :</label>
                <input type="date" name="date" required>
                
                <label>Heure :</label>
                <input type="time" name="heure" required>
                
                <label>Nombre de personnes :</label>
                <input type="number" name="nombre-personnes" required>
                
                <button type="submit">Planifier</button>
            </form>
        </div>
    </div>
</body>
</html>
