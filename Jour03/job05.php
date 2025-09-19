<?php
// 1. Créer la variable avec le texte
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// 2. Créer le dictionnaire (tableau associatif)
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// 3. Liste des voyelles (y compris accentuées)
$voyelles = ['a','e','i','o','u','y','à','â','é','è','ê','ë','î','ï','ô','ö','ù','û','ü'];

// 4. Parcourir la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // mettre en minuscule
    
    if (ctype_alpha($char)) { // vérifier si c'est une lettre
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// 5. Afficher dans un tableau HTML
echo "<table border='1' cellpadding='5'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>