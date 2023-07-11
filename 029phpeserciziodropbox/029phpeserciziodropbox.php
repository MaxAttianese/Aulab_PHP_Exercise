<?php

/* Creare una funzione check_blacklist che prende in input due parametri:

- un array $blacklist contenente un elenco di indirizzi ip
- una stringa contenente un singolo indirizzo ip

La funzione esegue die() se il singolo indirizzo si trova all'interno dell'array $blackist.
Utilizzate questo array, parleremo più avanti di cos'è un indirizzo ip, per adesso trattateli come semplici stringhe:

    $blacklist = [
            '192.168.0.101',
            '192.168.0.121',
            '192.168.0.103',
            '192.168.0.134',
            '192.168.0.125',
        ]; */

$blacklist = [
    '192.168.0.101',
    '192.168.0.121',
    '192.168.0.103',
    '192.168.0.134',
    '192.168.0.125',
    ];

$ip = 'prova';


function check_blacklist($array, $str) {

    foreach($array as $element) {

        if($str == $element){

            die();

        }
        else{
            echo "Non è in questa posizione \n";
        }
    };

    echo 'Prova del die';

};



check_blacklist($blacklist, $ip);

?>