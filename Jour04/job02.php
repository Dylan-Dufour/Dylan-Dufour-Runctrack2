<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire GET</title>
</head>
<body>
  <h1>Formulaire de test (méthode GET)</h1>

  <!-- On envoie les données vers la page afficher.php -->
  <form action="" method="get">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Ex: Stephane"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Ex: Dupont"><br><br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" placeholder="Ex: Paris"><br><br>

    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
<?php
// Début de la page HTML
echo "<!doctype html>";
echo "<html lang='fr'>";
echo "<head><meta charset='utf-8'><title>Résultats</title></head>";
echo "<body>";
echo "<h1>Arguments GET reçus</h1>";

// Vérifier si on a bien reçu des données
if (empty($_GET)) {
    echo "<p>Aucun paramètre n’a été envoyé.</p>";
} else {
    // Créer le tableau
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir tous les paramètres reçus
    foreach ($_GET as $argument => $valeur) {
        // Sécurité : on échappe le texte
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
exit();
