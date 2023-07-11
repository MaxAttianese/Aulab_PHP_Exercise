<?php

/* All'array precedente, aggiungere un nuovo elemento con chiave ‘accessori' che contenga a sua volta questi due elementi: cambio automatico, navigatore satellitare */

$cars = [

    'Marca' => 'Fiat',

    'Modello' => '500',

    'Motore' => 'Elettrico',

    'Colore' => 'Rosso',

    'Accessori' => ['Cambio Automatico', 'Navigatore Satellitare',]
];

var_dump($cars['Accessori']);

?>