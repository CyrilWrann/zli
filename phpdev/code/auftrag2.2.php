<?php

$d = date("Y");
$a = readline("welchen jahrgang hast du? ");
if ($a > $d) {
    echo "NOK!";
} else {
    echo "OK!";
}
