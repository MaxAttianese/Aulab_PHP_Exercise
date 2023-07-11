<?php

/* Scrivere una funzione che prenda in input un array ed una stringa. La funzione cerca l'elemento indicato nella stringa tra gli elementi degli array e se lo trova stampa il messaggio: "Trovato alla posizione: n" dove n è l'indice dell'elemento nell'array. Se l'elemento non viene trovato, la funzione stampa il messaggio: "Elemento non trovato". Se l'elemento viene trovato, interrompere il foreach con il comando "break". */


$courses = ['Php', 'Laravel', 'Javascript', 'Css', 'Html'];

$search ="";

function searchWord($array, $str) {

    foreach($array as $index => $element) {

        if($str == $element) {

            echo("Trovato alla posizione: $index");
            break;
        };
    };
    if($str != $element) {

        echo("Non Trovato");

    };

};

searchWord($courses, $search);

?>