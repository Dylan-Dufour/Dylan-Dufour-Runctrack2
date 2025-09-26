<?php
// 1. Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour09");
// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}

// 2. Écrire la requête SQL
$sql = "SELECT count(*) AS total_etudiants FROM `etudiants`";

// 3. Exécuter la requête
$resultat = $mysqli->query($sql);

// 4. Vérifier s’il y a des résultats
if ($resultat->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'>";
    
    // 4.1. Récupérer les noms de colonnes pour le thead
    echo "<thead><tr>";
    while ($colonne = $resultat->fetch_field()) {
        echo "<th>" . $colonne->name . "</th>";
    }
    echo "</tr></thead>";

    // 4.2. Afficher les données pour le tbody
    echo "<tbody>";
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>" . $valeur . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";

    // Fin du tableau
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// 5. Fermer la connexion
$mysqli->close();
?>