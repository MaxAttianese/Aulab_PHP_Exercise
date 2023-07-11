<?php

/* Creare un Trait chiamato Movimenti che contenga questi due metodi:

    - public avanti() che stampa: "Mi sto muovendo in avanti"
    - public indietro() che stampa: "Mi sto muovendo indietro" */


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

    use Movements;

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

        echo "Sono un'auto " . $this -> brand . " " . $this -> model . "\n";
    }
}



trait Movement {

    public function goAhead() {

        echo "Mi sto muovendo in avanti \n";

    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";

    }
}



$motorbike1 = new Motorbike("Zip", "sp");

var_dump($motorbike1);

$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();

$car1 -> goAhead();

?>