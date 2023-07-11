<?php

/* Abbiamo un'auto di marca Fiat, modello 500, motore elettrico e colore rosso:  
    - Strutturare i dati di questa auto utilizzando un array associativo.
    - Stampare una stringa con apici singoli che attraverso echo visualizzi: “L'auto scelta è una Fiat   500". Dove Fiat e 500 sono presi dall'array
*/

$cars = [

    'Marca' => 'Fiat',

    'Modello' => '500',

    'Motore' => 'Elettrico',

    'Colore' => 'Rosso',
];

echo('L\'auto scelta è una ' . $cars['Marca'] . " " . $cars['Modello']);


?>