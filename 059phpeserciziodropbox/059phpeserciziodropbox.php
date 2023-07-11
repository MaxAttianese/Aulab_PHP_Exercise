<?php

/* Assegnare l'interfaccia MovimentiInterface creata alla classe Auto ed effettuare un test creando un oggetto di tipo auto.
Successivamente, assegnare il trait Movimento alla classe Auto ed effettuare di nuovo un test. */


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


    /*public function goAhead() {

        echo "Mi sto muovendo in avanti \n";
    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";
    }*/

};



class Motorbike extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }

    public function printVehicle() {

        echo "Sono una moto " . $this -> brand . " " . $this -> model . "\n";
    }
}



/*class Car extends Vehicle implements Movements{

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }

    public function printVehicle() {

        echo "Sono un'auto " . $this -> brand . " " . $this -> model . "\n";
    }



    // Con Interface dobbiamo per forza riscrivere i metodi per ispettare il vincolo implementato in questa classe con implements


    public function goAhead() {

        echo "Mi sto muovendo in avanti \n";
    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";
    }

}*/

class Car extends Vehicle {

    public function __construct($brand, $model){

        parent:: __construct($brand, $model);

    }

    public function printVehicle() {

        echo "Sono un'auto " . $this -> brand . " " . $this -> model . "\n";
    }

    // Con i trait basta inserire use per ereditare direttamente i metodi

    use Movement;
}


trait Movement {

    public function goAhead() {

        echo "Mi sto muovendo in avanti \n";

    }

    public function goBack() {

        echo "Mi sto muovendo indietro \n";

    }
}



interface Movements{

    public function goAhead();

    public function goBack();
}



// $motorbike1 = new Motorbike("Zip", "sp");

// var_dump($motorbike1);

$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();

$car1 -> goAhead();

?>