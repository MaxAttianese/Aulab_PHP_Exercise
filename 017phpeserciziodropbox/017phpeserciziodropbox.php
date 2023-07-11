<?php

/* Modificare la variabile $total in modo da ottenerne il valore sommando gli importi contenuti nel seguente array:

- [1000, 2500, 1955.5, 560, 700] */

$numbers = [1000, 2500, 1955.5, 560, 700];

$total = 0;

foreach($numbers as $number) {

    $total += $number;

};

$single = 'Il totale degli importi delle fatture emesse questo mese è di ' . $total . ' euro';

$double = "Il totale degli importi delle fatture emesse questo mese è di $total euro";


echo($total);

var_dump($single);

var_dump($double);

?>