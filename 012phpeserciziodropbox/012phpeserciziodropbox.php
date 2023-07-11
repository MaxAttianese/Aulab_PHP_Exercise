<?php

/* Stampare tutti gli elementi dell'array all'esercizio 4 utilizzando foreach, visualizzandone anche la chiave. */

$cars = [

    'Marca' => 'Fiat',

    'Modello' => '500',

    'Motore' => 'Elettrico',

    'Colore' => 'Rosso',
];

foreach ($cars as $key => $car) {

    var_dump("$key => $car");

};

?>