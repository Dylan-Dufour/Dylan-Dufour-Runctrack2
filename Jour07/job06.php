<?php
$leetSpeak
    = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'O' => '0',
        'S' => '5',
        'T' => '7'
    );
$str = "Bonjour, je m'appelle Dylan et j'aime le PHP.";
$strLeet = strtr($str, $leetSpeak);
echo $strLeet;
