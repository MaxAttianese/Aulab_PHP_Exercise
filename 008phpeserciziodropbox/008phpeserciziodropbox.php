<?php

/* Creare una variabile $temperatura ed utilizzando if, stampare il testo "Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi. */

$temp = 28;

/*
Part 1


if($temp <= 15) {

    echo("Fa Freddo");
}
else{

    if($temp > 15) {

    echo("Fa caldo");

    }
};*/

/* Parte 2 */

if($temp > 25) {

    echo("Fa Molto Caldo");

}
elseif ($temp > 15) {

    echo("Fa caldo");

}
else {

    echo("Fa Freddo");

};


?>