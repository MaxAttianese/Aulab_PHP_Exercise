<?php

/* creare una funzione che prende in input questi 3 parametri nel seguente ordine: email, nome, cognome e restituisce un array che poi andrete a memorizzare in una variabile $user */

$email = "maxattianesekr94@gmail.it";

$name = "Max";

$surname = "Attianese";

function createUser($email, $firstname, $lastname) {

    $array = [

        'email' => $email,

        'nome' => $firstname,

        'cognome' => $lastname,
    ];

    return $array;

};

$user = createUser($email, $name, $surname);

var_dump($user);

?>