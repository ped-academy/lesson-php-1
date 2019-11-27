<?php

// Esercizio 2
// Dato l'array $studenti, stampare a video il nome dello studente con il voto più alto

$studenti = [
    [
        'nome' => "Luigi",
        'voto' => 24,
    ],
    [
        'nome' => "Mario",
        'voto' => 28,
    ],
    [
        'nome' => "Peppe",
        'voto' => 18,
    ],
];

// Soluzione 1

$studenteMigliore = $studenti[0];

for ($i = 0; $i < count($studenti); $i++) {
    if ($studenti[$i]['voto'] > $studenteMigliore['voto']) {
        $studenteMigliore = $studenti[$i];
    }
}

echo "Studente migliore: " . $studenteMigliore['nome'] . "<br>";

// Soluzione 2 con foreach

$studenteMigliore = $studenti[0];

foreach ($studenti as $studente) {
    if ($studente['voto'] > $studenteMigliore['voto']) {
        $studenteMigliore = $studente;
    }
}

echo "Studente migliore: " . $studenteMigliore['nome'] . "<br>";