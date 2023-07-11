<?php

/* Modificare la visibilità del metodo getAge in modo che non sia più direttamente accessibile dall'oggetto (deve essere quindi private).
Creare poi un nuovo metodo public "ageRange" che, utilizzando getAge, stampi: "Lo studente si trova nella fascia di età: " seguito dalla fascia di età ricavata da getAge.

(!) Fate attenzione a modificare getAge in modo che, in questo caso, restituisca un valore attraverso "return" e non stampi più direttamente attraverso echo. */

class Student {

    public $name;

    public $email;

    private $age;


    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }



    private function getAge() {

        if($this -> age >= 18 && $this -> age <= 30) {

            return "18 - 30";

        }
        else if($this -> age >= 31 && $this -> age <= 50) {

            return "31 - 50";

        }
        else if($this -> age > 50) {
            
            return "50+";

        }
    }

    public function ageRange() {

        echo ("Lo studente si trova nella fascia di età: " . $this -> getAge());

    }
};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@libero.it", "28");



//echo $student3 -> age;

$student1 -> ageRange();


?>