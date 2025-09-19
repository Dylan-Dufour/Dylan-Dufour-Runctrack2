<?php
// 1. Créer la variable
$str = "Dans l'espace, personne ne vous entend crier";

// 2. Créer un compteur
$count = 0;

// 3. Parcourir la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    $count++;  // on ajoute 1 à chaque caractère
}

// 4. Afficher le résultat
echo "La chaîne contient " . $count . " caractères.";
?>
