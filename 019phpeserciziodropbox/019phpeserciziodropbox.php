<?php

/* Modificare la funzione dell'esercizio 1 in questo modo:
    - non deve più stampare il risultato
    - deve restituire il risultato della somma attraverso "return"
Una volta effettuata questa modifica, memorizzare il valore restituito dalla funzione in una variabile $somma e successivamente stamparlo attraverso la funzione echo. */

$num1 = 5;

$num2 = 10;

function sum($num1, $num2) {

    $sum = 0;

    $sum = $num1 + $num2;

    return $sum;

};

$sum = sum($num1, $num2);

echo $sum;


?>