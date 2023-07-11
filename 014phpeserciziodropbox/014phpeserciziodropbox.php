<?php

/* Utilizzando opportunamente foreach ed if: creare una variabile $search che contiene uno degli elementi a piacere dell'esercizio 3. Poi scorrere l'array dell'esercizio 3 utilizzando foreach e stampare "Trovato!" se l'elemento corrente è uguale a quello contenuto nella variabile $search. */

$courses = ['Php', 'Laravel', 'Javascript', 'Css', 'Html'];

$search = 'Javascript';

foreach($courses as $key => $course) {

    if($course == $search) {

        echo("$key => Trovato");
        
    };
};

?>