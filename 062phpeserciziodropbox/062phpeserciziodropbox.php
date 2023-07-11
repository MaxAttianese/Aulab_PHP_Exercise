<?php

/* Modificare opportunamente la classe Veicolo e quanto fatto all'esercizio 9 in modo da ottenere lo stesso funzionamento, ma, questa volta, passando l'oggetto di tipo Motore non più attraverso il metodo avviaMotore, ma attraverso il costruttore di Veicolo. */


abstract class Vehicle {

    public function __construct(public $brand, public $model, public $motor){

        $this -> brand = $brand;

        $this -> model = $model;

        $this -> motor = $motor;

    }

    public function motorTurnOn() {

        $this -> motor -> motorTurnOn();

    }

    public function motorTurnOff() {

        echo "Il veicolo è spento \n";

    }

    abstract function printVehicle();


    public function goAhead() {

        echo "Mi sto muovendo in avanti \n";
    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";
    }

    use Movement;

};



class Motorbike extends Vehicle {

    public function __construct($brand, $model, $motor){

        parent:: __construct($brand, $model, $motor);

    }

    public function printVehicle() {

        echo "Sono una moto " . $this -> brand . " " . $this -> model . "\n";
    }
}



class Car extends Vehicle {

    public function __construct($brand, $model, $motor){

        parent:: __construct($brand, $model, $motor);

    }

    public function printVehicle() {

        echo "Sono un'auto " . $this -> brand . " " . $this -> model . "\n";
    }

}


class Motor {

    public function motorTurnOn() {

        echo "Il veicolo è acceso \n";

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



/*interface Movements{

    public function goAhead();

    public function goBack();
}*/



// Motorbike prove

// $motorbike1 = new Motorbike("Zip", "sp");

// var_dump($motorbike1);



// Car prove 

$car1 = new Car("Fiat", "Punto", new Motor);

var_dump($car1);

$car1 -> printVehicle();

// $car1 -> goAhead();

$car1 -> motorTurnOn();



?>