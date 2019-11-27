<?php

// Esercizio 1
// Memorizzare in un array i primi 10 multipli di 3.
// Stampare a video tutti gli elementi dell’array e la somma totale.

define('MAX_RESULTS', 10);
define('NUM', 3);

$array = [];

for ($i = 0; $i < MAX_RESULTS; $i++) {
    $array[] = ($i + 1) * NUM;
}

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

echo "Somma totale: " . array_sum($array);
