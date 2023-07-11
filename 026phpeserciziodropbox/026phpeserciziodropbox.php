<?php

/* Creare una funzione check_password_lenght che verifica se la lunghezza di una password (stringa) è di lunghezza compresa tra 8 e 18 caratteri. Se è compresa tra questi due valori, restituisce true, altrimenti false */

$password = "CiaosonoMax94";

function check_password_lenght($str) {

    if(8 <= strlen($str) &&  strlen($str) <= 18) {

        echo("true");

    }
    else {

        echo("false");
    };
};

check_password_lenght($password);


?>