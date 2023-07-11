<?php

/* Creare un metodo per GrandeDistribuzione che permetta di aggiungere una nuova sede. */

class Client {

    public $name;

    public $city;

    public $revenueAnnual;

    public $managerName;

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue){

        $this -> name = $nameValue;

        $this -> city = $cityValue;

        $this -> revenueAnnual = $revenueAnnualValue;

        $this -> managerName = $managerNamevalue;

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

    public function setLocation($newLocation) {

        $this -> locationList[] = $newLocation;
    }
}

$largeDistribution = new LargeDistribution("Max", "Crotone", 15000, "Max");

var_dump($largeDistribution);

$largeDistribution -> setLocation("Rio");

$largeDistribution -> setLocation("Ibiza");

var_dump($largeDistribution);

?>