<?php

$eingabe = readline("wie heist du? ");
$eingabe2 = readline("woher bist du? ");
$eingabe3 = readline("wann bist du geboren? ");

echo  "Du heisst: $eingabe" . PHP_EOL . "bist geboren im Jahr $eingabe3 " . PHP_EOL .
" und kommst aus $eingabe2" . PHP_EOL;

printf("%s, %s, %d" . PHP_EOL, $eingabe, $eingabe2, $eingabe3);
