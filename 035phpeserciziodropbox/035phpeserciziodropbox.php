<?php

/* Vogliamo che il metodo getAge non stampi direttamente l'età dello studente ma la fascia di appartenenza come di seguito, utilizzando echo:

    - '18 - 30' se l’età è compresa tra 18 e 30
    -  '31 - 50', se l’età è compresa tra 31 e 50
    -  ‘50+'. se l’età è maggiore di 50

Apportare quindi le opportune modifiche al metodo. */

class Student {

    public $name;

    public $email;

    private $age;

    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }

    public function getAge() {

        if($this -> age >= 18 && $this -> age <= 30) {

            echo("18 - 30");

        }
        else if($this -> age >= 31 && $this -> age <= 50) {

            echo("31 - 50");

        }
        else if($this -> age > 50) {

            echo("50+");

        }
    }
};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@libero.it", "28");



//echo $student3 -> age;

$student1 -> getAge();


?>