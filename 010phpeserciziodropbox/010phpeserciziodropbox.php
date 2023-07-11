<?php

/* Utilizzando un ciclo for, stampare tutti i numeri pari da 2 a 10. */

for ($i = 1; $i <= 10; $i++) {

    $div = ($i % 2) + $i++;

    echo("$div \n");

};

?>