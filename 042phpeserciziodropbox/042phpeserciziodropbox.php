<?php

/* Un'azienda che produce smartphone ha due tipologie di clienti:

    - Negozio
    - Grande distribuzione
 Per meglio organizzare la consegna dei propri prodotti, realizza un software che gestisce i punti vendita e, più in dettaglio, le due tipologie di clienti sono così caratterizzate:
 Negozio (singola sede):

    - nome
    - città
    - fatturato annuo
    - nome del responsabile
    - telefono
    - email
 Grande distribuzione (con più sedi):

    - nome
    - città (della sede principale)
    - fatturato annuo
    - nome del responsabile
    - elenco delle sedi dei vari negozi (elemento singolo composto da solo il nome della città)
 
 Creare le relative classi, cercando di usare il concetto di ereditarietà sulle proprietà che sono in comune (magari partendo da una classe Cliente).
 Scrivere opportunamente il costruttore in modo che, ogni oggetto creato abbia almeno i seguenti dati: nome, città, fatturato annuo e nome del responsabile. */


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

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue, $telephoNumberValue, $emailValue) {

        parent :: __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue);

        $this -> telephoNumber = $telephoNumberValue;

        $this -> email = $emailValue;

    }
}

class LargeDistribution extends Client {

    public $locationList = [];

    public function __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue, $locationListValue) {

        parent :: __construct($nameValue, $cityValue, $revenueAnnualValue, $managerNamevalue);

    }
}

$shop = new Shop("Armani", "Crotone", 15000, "Max", 320, "m@m");

var_dump($shop);

?>