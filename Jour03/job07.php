<?php
// 1. Phrase de départ
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// 2. Nouvelle chaîne vide
$newStr = "";

// 3. Longueur de la chaîne
$len = strlen($str);

// 4. Boucle pour décaler les caractères
for ($i = 0; $i < $len; $i++) {
    if ($i == $len - 1) {
        // dernier caractère → remplacer par le premier
        $newStr .= $str[0];
    } else {
        // sinon → remplacer par le caractère suivant
        $newStr .= $str[$i + 1];
    }
}

// 5. Afficher le résultat
echo $newStr;
?>
