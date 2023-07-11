<?php

/* Creare questi 4 tipi di variabili a piacere e visualizzarne il contenuto attraverso la funzione var_dump():
    - intero
    - decimale
    - stringa
    - booleano
*/

$int = 10;

$dec = 10.5;

$string = "Esercizi php";

$bool = true;



var_dump($int);

var_dump($dec);

var_dump($string);

var_dump($bool);


if($bool) {

    var_dump($int . " " . $dec . " " . $string);

} ;


?>