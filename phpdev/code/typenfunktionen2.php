<?php

$franken = readline("weifil wilst du runden? ");


$geld = (float) $franken;
$gerundet = round($geld);

echo "sie haben $gerundet Fr. auf dem konto. " . PHP_EOL;
