<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire POST</title>
</head>
<body>
  <h1>Formulaire de test (POST)</h1>

  <!-- On envoie les données vers traitement.php -->
  <form action="" method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville"><br><br>

    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
<?php

// Vérifie si on a reçu des données
if (empty($_POST)) {
    echo "<p>Aucun argument POST n’a été envoyé.</p>";
} else {
    // Compter le nombre d’arguments POST
    $nb_arguments = count($_POST);
    echo "<p>Le nombre d’argument POST envoyé est : <strong>" . $nb_arguments . "</strong></p>";

    // Créer un tableau pour afficher les détails
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir tous les champs reçus
    foreach ($_POST as $argument => $valeur) {
        // Échapper les caractères spéciaux pour éviter les failles XSS
        $argument = htmlspecialchars($argument, ENT_QUOTES, 'UTF-8');
        $valeur   = htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8');

        echo "<tr>";
        echo "<td>$argument</td>";
        echo "<td>$valeur</td>";
        echo "</tr>";
    }

    echo "</table>";
}

echo "</body></html>";
?>
<?php