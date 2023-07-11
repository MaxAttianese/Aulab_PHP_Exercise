<?php

/* Creare una classe "abstract" chiamata Veicolo che abbia le seguenti proprietà:

    - marca
    - modello

ed i seguenti metodi con visibilità pubblica:

    - avviaMotore() che stampa: "Motore avviato"
    - spegniMotore() che stampa: "Motore spento"

I valori di marca e modello devono essere passati attraverso il costruttore. */


abstract class Vehicle {

    public function __construct(public $brand, public $model){

        $this -> brand = $brand;

        $this -> model = $model;

    }

    public function motorTurnOn() {

        echo "Il veicolo è acceso \n";

    }

    public function motorTurnOff() {

        echo "Il veicolo è spento \n";

    }

};



?>