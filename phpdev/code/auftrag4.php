<?php

$geburtsjahr = readline("in welchen jahren bist du geboren? " . PHP_EOL);
$alter = date("Y") - $geburtsjahr;

echo "in diesem jahr wirst du $alter alt!"  . PHP_EOL;
