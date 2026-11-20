<?php

//author @cyril
//version finished
//copyright @CyrilWrann


//poses the question
function question()
{
    return readline("Hallo Welt in english? ");
}
//repeats the question over and over again until the answer is written correctly
do {
    $eingabe = question();
    $str = "$eingabe";
    $str = strtolower($str);
    $answer = correct($eingabe);
    echo "$str" . PHP_EOL;
} while (!$answer);
//this function corrects weather the answer ist written correct or no
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
