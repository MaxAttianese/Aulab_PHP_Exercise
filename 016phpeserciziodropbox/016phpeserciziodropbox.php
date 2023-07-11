<?php

/* Modificare l'esercizio 11 in modo da stampare ‘Nessun corso disponibile' se rimuoviamo tutti gli elementi dall'array. */

//$courses = ['Php', 'Laravel', 'Javascript', 'Css', 'Html'];

$courses = [];



if (! $courses) {

    echo('Nessun corso disponibile');
    
};

?>