<?php

/* Data una variabile $testo = 'Testo iniziale', creare una funzione che modifichi il valore di quella variabile esterna con un testo a piacere passando il parametro per riferimento (&). */

$text = 'Testo iniziale';

function custom(&$text) {

    $text = 'Testo a piacere';
};

custom($text);

echo $text;

?>