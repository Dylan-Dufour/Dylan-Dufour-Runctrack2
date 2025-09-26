<?php
// 1. Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier si la connexion a échoué
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// 2. Écrire la requête SQL
$sql = "SELECT nom, capacite FROM salles";

// 3. Exécuter la requête
$resultat = $mysqli->query($sql);

// 4. Vérifier s’il y a des résultats
if ($resultat->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'>";
    
    // 4.1. En-tête (thead) avec les noms des colonnes
    echo "<thead><tr>";
    echo "<th>nom</th>";
    echo "<th>capacite</th>";
    echo "</tr></thead>";

    // 4.2. Données avec les infos de la base
    echo "<tbody>";
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne["nom"] . "</td>";
        echo "<td>" . $ligne["capacite"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";

    // Fin du tableau
    echo "</table>";
} else {
    echo "Aucune salle trouvée.";
}

// 5. Fermer la connexion
$mysqli->close();
?>
