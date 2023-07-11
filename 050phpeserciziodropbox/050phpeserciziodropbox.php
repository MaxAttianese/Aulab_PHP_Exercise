<?php

/* Modificare il metodo all'esercizio 7 in modo che sommi tutti i fatturati presenti nell'elenco delle sedi e ne stampi il risultato in questo modo: "Il fatturato totale di nome_della_grande_distribuzione è valore_del_fatturato". */

class Client {

    public $name;

    public $city;

    private $revenueAnnual;

    public $managerName;

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue){

        $this -> name = $nameValue;

        $this -> city = $cityValue;

        $this -> revenueAnnual = $revenueAnnualValue;

        $this -> managerName = $managerNamevalue;

    }

    public function getrevenueAnnual() {

        echo $this -> revenueAnnual;
    }
}

class Shop extends Client {

    public $telephoNumber;

    public $email;

    const SHOP = "Shop";

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue, $telephoNumberValue, $emailValue) {

        parent :: __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue);

        $this -> telephoNumber = $telephoNumberValue;

        $this -> email = $emailValue;

    }

}

class LargeDistribution extends Client {

    const LARGE_DISTRIBUTION = "Large Distribution";

    public $locationList = [];

    public $totalrenvenue;

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue) {

        parent :: __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue);

    }

    public function setLocation($newLocation, $emailLocationValue,  $telNumberLocvalue, $revenueAnnualValue) {

        $this -> locationList[$newLocation] = [
            
            "newLocation" => $newLocation,

            "email" => $emailLocationValue,

            "Telephone" => $telNumberLocvalue,

            "revenueAnnual" => $revenueAnnualValue,

        ];
    }
    
    public function getrevenueAnnual() {

        echo "Dato non disponibile";
        
    }



    public function totalrenvenue() {


        foreach($this -> locationList as $x => $value){

            $this -> totalrenvenue = $this -> totalrenvenue + $value["revenueAnnual"];
        }

        return $this -> totalrenvenue; 

    }

}

$Shop = new Shop("Map", "Crotone", 20000, "Max", 328, "prova");

$largeDistribution = new LargeDistribution("Max'sDistribution", "Crotone", 15000, "Max");

$largeDistribution -> setLocation("Rio", "m@m", 328, 15000);

$largeDistribution -> setLocation("Ibiza", "m@m", 328, 25000);

$largeDistribution -> setLocation("Roma", "m@m", 328, 10000);

$largeDistribution -> totalrenvenue();


var_dump($largeDistribution);

echo "Il fatturato totale di " . $largeDistribution -> name . " è " . $largeDistribution -> totalrenvenue;

?>