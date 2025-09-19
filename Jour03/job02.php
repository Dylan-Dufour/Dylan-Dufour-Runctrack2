<?php
// 1. Créer la variable avec le texte
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// 2. Parcourir la chaîne en sautant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>
