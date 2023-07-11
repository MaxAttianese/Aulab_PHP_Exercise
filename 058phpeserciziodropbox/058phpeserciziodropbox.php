<?php

/* Creare una interfaccia MovimentiInterface che impone alla classe che la implementa di avere:

    - un metodo public avanti()
    - un metodo public indietro() */


abstract class Vehicle implements Movement {

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


    /*public function goAhead() {

        echo "Mi sto muovendo in avanti \n";
    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";
    }*/

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


trait Movements {

    public function goAhead() {

        echo "Mi sto muovendo in avanti \n";

    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";

    }
}



interface Movement{

    public function goAhead();

    public function goBack();
}



$motorbike1 = new Motorbike("Zip", "sp");

var_dump($motorbike1);

$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();

$car1 -> goAhead();

?>