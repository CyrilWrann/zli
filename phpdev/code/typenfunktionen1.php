<?php

$eingabe = readline("welche zahl möchtest du runden? ");

if (!is_numeric($eingabe)) {
    exit("Bitte gültige zahl eingeben.");
}

$num = (float) $eingabe;
$gerundet = round($num);

echo "Gerunden: $gerundet" . PHP_EOL;
