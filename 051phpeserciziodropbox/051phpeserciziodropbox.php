<?php

/*Creare un metodo in GrandeDistribuzione che rimuova una sede in base all'indice passato:

    - Se l'indice è presente nell'array, il metodo rimuove l'elemento e restituisce la stringa "deleted";
    - Se l'indice non presente, restituisce la stringa "not_found". */


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
    
        public $totalrenvenue ;
    
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

        public function deleteLocation($index) {

            print_r($this -> locationList);

            if(array_key_exists($index, $this -> locationList)) {

                unset($this -> locationList[$index]);

                echo "deleted \n";

                return "deleted";

            }
            else{

                echo "not_found \n";

                return "not_found";

            }
        }
    
    }
    
    $Shop = new Shop("Map", "Crotone", 20000, "Max", 328, "prova");
    
    $largeDistribution = new LargeDistribution("Max", "Crotone", 15000, "Max");
    
    $largeDistribution -> setLocation("Rio", "m@m", 328, 15000);
    
    $largeDistribution -> setLocation("Ibiza", "m@m", 328, 25000);
    
    $largeDistribution -> setLocation("Roma", "m@m", 328, 10000);

    $largeDistribution -> totalrenvenue();

    $largeDistribution -> deleteLocation("Roma");
    
    //var_dump($largeDistribution);

    print_r($largeDistribution  -> locationList);
    
    

    
?>
