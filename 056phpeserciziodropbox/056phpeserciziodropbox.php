<?php

/* Creare un metodo abstract stampaCaratteristiche nella classe Veicolo ed implementarlo nelle classi Moto e Auto:

    - in Moto deve stampare: "Sono una moto marca e modello"
    - in Auto deve stampare: "Sono un auto marca e modello" */


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

    abstract function printVehicle();

};



class Motorbike extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }

    public function printVehicle() {

        echo "Sono una moto " . $this -> brand . " " . $this -> model . "\n";
    }
}



class Car extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }

    public function printVehicle() {

        echo "Sono un'auto " . $this -> brand . " " . $this -> model. "\n";
    }
}



$motorbike1 = new Motorbike("Zip", "sp");

var_dump($motorbike1);

$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();



?>