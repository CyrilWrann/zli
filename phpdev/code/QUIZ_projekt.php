<?php

function question()
{
    return readline("Hallo Welt in english? ");
}

do {
    $eingabe = question();
    $str = "$eingabe";
    $str = strtolower($str);
    $answer = correct($eingabe);

    echo "$str" . PHP_EOL;
} while (!$answer);

function correct(string $eingabe)
{
    if ($eingabe === "Hello World") {
        echo "You are smart" . PHP_EOL;
        return true;
    } else {
        echo "You should get tested for dislexya." . PHP_EOL;
        return false;
    };
}
