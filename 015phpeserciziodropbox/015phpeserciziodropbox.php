<?php

/* Creare un array che ha come elementi i numeri da 1 a 10 [1, 2, 3, ecc...]. Utilizzando foreach, stampare "Pari" se l'elemento corrente è un numero pari e "Dispari" in caso contrario. */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($numbers as $key => $number) {

    if($number % 2){

        echo("$number => Dispari \n");
    }
    else{

        echo("$number => Pari \n");
  
    };
};

?>