<?php

/* Stampare il risultato di somma(2, 5), senza modificare la funzione, direttamente attraverso echo senza salvare il valore restituito in una variabile. */

$num1 = 2;

$num2 = 5;

function sum($num1, $num2) {

    $sum = 0;

    $sum = $num1 + $num2;

    echo $sum;

};

sum($num1, $num2);


?>