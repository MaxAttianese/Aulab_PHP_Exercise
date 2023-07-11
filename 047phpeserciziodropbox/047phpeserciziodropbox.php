<?php

/*  Modificare la visibilità della proprietà "fatturato annuo" in private. In seguito scrivere un opportuno metodo per poter stampare questo dato una volta creato l'oggetto. */

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

}

$largeDistribution = new LargeDistribution("Max", "Crotone", 15000, "Max");

$largeDistribution -> setLocation("Rio", "m@m", 328, 15000);

$largeDistribution -> getrevenueAnnual();

?>