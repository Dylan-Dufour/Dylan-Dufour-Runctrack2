<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Dessiner une maison</title>
</head>
<body>
  <h1>Dessiner une maison</h1>

  <form action="" method="get">
    <label for="largeur">Largeur :</label>
    <input type="text" id="largeur" name="largeur" required><br><br>

    <label for="hauteur">Hauteur :</label>
    <input type="text" id="hauteur" name="hauteur" required><br><br>

    <input type="submit" value="Dessiner">
  </form>
</body>
</html>
<?php
// Vérifier que les deux champs sont bien envoyés
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {

    $largeur = (int)$_GET['largeur']; // conversion en entier
    $hauteur = (int)$_GET['hauteur'];

    echo "<pre>"; // permet de garder la mise en forme

    // Partie toit de la maison
    for ($i = 1; $i <= $hauteur; $i++) {
        echo str_repeat(' ', $hauteur - $i);

        echo str_repeat('-', 2 * $i - 1);

        echo "\n";
    }

    for ($j = 1; $j <= $largeur - $hauteur; $j++) {
        echo str_repeat('-', 2*$hauteur - 1) . "\n";
    }

    echo "</pre>";

} else {
    echo "Veuillez entrer la largeur et la hauteur.";
}
?>
