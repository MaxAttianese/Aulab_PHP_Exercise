<?php

/* Creare una classe Motore che abbia un solo metodo public avvia(). Il metodo avvia stampa: "Motore avviato".
Successivamente, modificare il metodo avviaMotore della classe Veicolo, in modo da ricevere, come parametro, un oggetto di tipo Motore e di questo oggetto ne chiami il metodo avvia(). */


abstract class Vehicle {

    public function __construct(public $brand, public $model){

        $this -> brand = $brand;

        $this -> model = $model;

    }

    public function motorTurnOn($motor) {

        $motor -> motorTurnOn();

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

$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();

// $car1 -> goAhead();

$car1 -> motorTurnOn(new Motor);



?>