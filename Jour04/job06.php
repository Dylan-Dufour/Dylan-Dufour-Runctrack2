<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pair ou Impair</title>
</head>
<body>
  <h1>Vérifier si un nombre est pair ou impair</h1>

  <!-- Formulaire envoyé en GET -->
  <form action="" method="get">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Vérifier">
  </form>
</body>
</html>
<?php
// Vérifier si on a bien reçu une valeur
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Vérifier que c'est bien un nombre
    if (is_numeric($nombre)) {
        // Convertir en entier
        $nombre = (int)$nombre;

        // Vérifier pair ou impair avec le modulo %
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer une valeur numérique valide.";
    }
} else {
    echo "Aucun nombre n’a été saisi.";
}
?>
