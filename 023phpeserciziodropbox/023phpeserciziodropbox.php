<?php

/* Creare una funzione somma che possa sommare "infiniti" numeri passati come singoli parametri. */

function sum(...$numbers) {


    foreach($numbers as $number) {

        $total += $number;

    };

    echo $total;
};

sum(3, 4, 5, 6);

echo $tolat

?>