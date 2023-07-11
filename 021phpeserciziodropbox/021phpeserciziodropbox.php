<?php

/* Creare una funzione stampa_testo che accetta come parametro una stringa da stampare. Fare in modo che se non viene passato nessun parametro, la funzione non generi errori e stampi un messaggio: ‘Attenzione: non hai indicato la stringa da stampare'. */

$str = "Hello";

function print_text($str = "") {

    if($str == "") {
        echo "Attenzione: non hai indicato la stringa da stampare";
    }
    else {

        echo $str;
    };

};

print_text();
?>