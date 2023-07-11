<?php

/* Aggiungere una costante di classe che abbia valore ‘Negozio' oppure ‘Grande Distribuzione' per le rispettive classi. Provare a stamparne il valore. */

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

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue, $locatioValue) {

        parent :: __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue);

        $this -> location = $locationValue;

    }
}


echo Shop :: SHOP . "\n";

echo LargeDistribution :: LARGE_DISTRIBUTION;

?>