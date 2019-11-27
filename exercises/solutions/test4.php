<?php

/*

Scrivere uno script che riceve in GET le variabili num e function_name:
- Se function_name == 'square' calcolare il quadrato di num
- Se function_name == 'factorial' calcolare il fattoriale di num

Esempi:

Url: test4.php?num=5&function_name=square
Output: 25

Url: test4.php?num=5&function_name=factorial
Output: 120

*/

// Soluzione


if (empty($_GET['function_name']))
{
    echo 'Il parametro "function_name" è obbligatorio!';
    exit(); //termina lo script
}

if (empty($_GET['num']))
{
    die('Il parametro "num" è obbligatorio!'); //shortcut per fare echo e exit
}

$function_name = $_GET['function_name'];
$num = $_GET['num'];

if ($function_name === 'square') {
    $result = square($num);
} elseif ($function_name === 'factorial') {
    $result = factorial($num);
} else {
    die("il valore '$function_name' non è un function_name valido!");
}

echo "$function_name($num) = $result";

// Definizione delle funzioni

function square($x) {
    return $x * $x;
}

function factorial($x) {
    if ($x <= 1) {
        return 1;
    } else {
        return $x * factorial($x - 1); //ricorsione
    }
}
