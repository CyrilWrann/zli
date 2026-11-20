<?php

$geburtsjahr = readline("in welchen jahren bist du geboren? " . PHP_EOL);
$alter = "65";
$pensionsalter = $geburtsjahr + $alter - date("Y");

echo "du wirst in $pensionsalter jahren pensioniert!" . PHP_EOL;
