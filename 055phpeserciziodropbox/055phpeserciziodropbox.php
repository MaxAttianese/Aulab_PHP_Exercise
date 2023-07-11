<?php

/* Creare una classe Auto che estende la classe Veicolo */


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



class Motorbike extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }
}



class Car extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }
}



$motorbike1 = new Motorbike("Zip", "sp");

var_dump($motorbike1);

$car1 = new Car("Fiat", "Punto");

var_dump($car1);



?>