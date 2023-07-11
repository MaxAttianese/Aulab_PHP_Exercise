<?php

/* Creare una classe Persona ed assegnare il trait Movimento. Creare un oggetto di tipo persona e verificare il corretto funzionamento dei metodi avanti e indietro; */


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

class People {

    public $firstname;

    public $lastname;

    public $age;

    public function __construct($firstnameValue, $lastnameValue, $ageValue) {

        $this -> firstname = $firstnameValue;

        $this -> lastname = $lastnameValue;

        $this -> age = $ageValue;

    }

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



/*interface Movements{

    public function goAhead();

    public function goBack();
}*/



// Motorbike prove


// $motorbike1 = new Motorbike("Zip", "sp");

// var_dump($motorbike1);



// Car prove


/*$car1 = new Car("Fiat", "Punto");

var_dump($car1);

$car1 -> printVehicle();

$car1 -> goAhead();*/


// People prove

$people1 = new People("Max", "Attianese", 28);

var_dump($people1);

$people1 -> goAhead();

$people1 -> goBack();



?>