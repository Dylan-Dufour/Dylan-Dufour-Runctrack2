<!DOCTYPE html>
<html lang="fr">
<form method="post">
  <!-- Champ texte -->
  <input type="text" name="str" placeholder="Écris un texte ici">

  <!-- Liste déroulante -->
  <select name="fonction">
    <option value="gras">Gras</option>
    <option value="cesar">César</option>
    <option value="plateforme">Plateforme</option>
  </select>

  <!-- Bouton envoyer -->
  <button type="submit">Valider</button>
</form>
<?php
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    if ($fonction === 'gras') {
        echo gras($str);
    } elseif ($fonction === 'cesar') {
        echo cesar($str, 2);
    } elseif ($fonction === 'plateforme') {
        echo plateforme($str);
    }
}
function gras($str) {
    $mots = explode(" ", $str); // coupe la phrase en mots
    foreach ($mots as &$mot) { // parcours chaque mot
        if (ctype_upper($mot[0])) { // si la première lettre est une majuscule
            $mot = "<b>$mot</b>"; // on met le mot en gras
        }
    }
    return implode(" ", $mots); // on re-colle les mots
}
function cesar($str, $decalage = 2) {
    $resultat = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Si c'est une lettre
        if (ctype_alpha($char)) {
            $ascii = ord($char); // code ASCII
            if (ctype_upper($char)) {
                // A=65, Z=90
                $resultat .= chr((($ascii - 65 + $decalage) % 26) + 65);
            } else {
                // a=97, z=122
                $resultat .= chr((($ascii - 97 + $decalage) % 26) + 97);
            }
        } else {
            $resultat .= $char; // si ce n’est pas une lettre, on ne change rien
        }
    }
    return $resultat;
}
function plateforme($str) {
    $mots = explode(" ", $str); // coupe la phrase
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") { // regarde si le mot finit par "me"
            $mot .= "_"; // ajoute "_"
        }
    }
    return implode(" ", $mots);
}
// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction == "gras") {
        echo gras($str);
    } elseif ($fonction == "cesar") {
        echo cesar($str); // décalage par défaut = 2
    } elseif ($fonction == "plateforme") {
        echo plateforme($str);
    }
}
