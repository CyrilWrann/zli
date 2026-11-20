<?php

$zaehler = 1;
$zahlen = [];
$continue = true;
while ($continue) {
    $eingabe = readline("Zahl $zaehler [x = abbruch]: ");
    if ($eingabe == "x") {
        break;
    }
    $zahlen[] = abs($eingabe);
    $zaehler++;
}
if (count($zahlen) > 0) {
    echo "kleinste Zahl: " . min($zahlen) . PHP_EOL;
    echo "grösste Zahl: " . max($zahlen) . PHP_EOL;
}
echo "Zahlen: " . implode(", ", $zahlen) . PHP_EOL;
