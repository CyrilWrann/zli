<?php

$a = readline("Zahl? ");
$a = $a % 2;
if ($a == 0) {
    echo 'zahl ist gerade' . PHP_EOL;
} else {
    echo "die Zahl ist ungerade" . PHP_EOL;
}
