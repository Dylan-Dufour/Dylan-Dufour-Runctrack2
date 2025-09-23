<?php
// Étape 1 : $_GET contient les paramètres envoyés dans l'URL

// Étape 2 : on utilise count() pour compter le nombre d'éléments

$nb_arguments = count($_GET);

// Étape 3 : on affiche le résultat

echo "Nombre d'arguments GET : " . $nb_arguments;
?>
