<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire POST</title>
</head>
<body>
  <h1>Formulaire de test (POST)</h1>

  <!-- Ce formulaire envoie les données vers traitement.php -->
  <form action="" method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville"><br><br>

    <!-- Bouton d’envoi -->
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>

<?php
// On compte combien d’arguments ont été envoyés en POST
$nb_arguments = count($_POST);

// On affiche le résultat
echo "Nombre d'arguments POST : " . $nb_arguments;
?>
