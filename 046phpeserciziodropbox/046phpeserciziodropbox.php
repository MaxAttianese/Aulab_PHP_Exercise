<?php

/*Adesso dobbiamo modificare la classe GrandeDistribuzione, in modo che l'elenco delle sedi non contenga più solamente le singole città, ma tutti i seguenti dati per ogni sede: città, email, telefono, fatturato.
Suggerimento: quello che vogliamo modificare è il singolo elemento dell'elenco sedi. L’elemento da essere una semplice stringa, diventa un array associativo contenente i vari campi: città, email, telefono, fatturato.
Riflettete: per come abbiamo scritto la classe, è realmente necessaria una modifica? O va già bene scritta così? Cosa cambia in realtà? */

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

    public function setLocation($newLocation, $emailLocationValue,  $telNumberLocvalue, $revenueAnnualValue) {

        $this -> locationList["Location name"] = [
            
            "newLocation" => $newLocation,

            "email" => $emailLocationValue,

            "Telephone" => $telNumberLocvalue,

            "revenueAnnual" => $revenueAnnualValue,

        ];
    }
}

$largeDistribution = new LargeDistribution("Max", "Crotone", 15000, "Max");

var_dump($largeDistribution);

$largeDistribution -> setLocation("Rio", "m@m", 328, 15000);


print_r($largeDistribution);

?>