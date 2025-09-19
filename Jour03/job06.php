<?php
// 1. Créer la chaîne
$str = "Les choses que l'on possede finissent par nous posseder.";

// 2. Variable pour stocker la chaîne inversée
$reverse = "";

// 3. Parcourir la chaîne à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reverse .= $str[$i]; // ajoute chaque caractère à la fin de $reverse
}

// 4. Afficher le résultat
echo $reverse;
?>
