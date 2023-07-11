<?php

/* Creare una funzione che prende in input un parametro di tipo stringa contenente diversi elementi separati da ; come in questo esempio: 'elemento1;elemento2 ;elemento3; elemento4'. La stringa in input deve rispettare queste tre regole:

- ogni elemento non può contenere spazi
- gli elementi sono separati tra loro da ;
- prima o dopo il ; può esserci, non obbligatoriamente uno spazio

La funzione deve restituire tutti gli elementi della stringa in input, organizzati in un array */


$phrase = 'elemento1;elemento2 ;elemento3; elemento4';

function createArray($str) {

    $str = str_replace(" ", "", $str);

    $arrayStr = explode(";",$str);

    return $arrayStr;
};

$array = createArray($phrase);

var_dump($array);

?>