<?php
// Étape 1 : Créer le tableau
$nombreTab = [200, 204, 173, 98, 171, 404, 459];

// Étape 2 : Parcourir chaque nombre
foreach ($nombreTab as $nombre) {
    // Étape 3 : Vérifier pair ou impair
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br>";
    } else {
        echo $nombre . " est impaire<br>";
    }
}
?>