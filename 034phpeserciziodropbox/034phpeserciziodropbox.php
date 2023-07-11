<?php

/* Adesso che non possiamo più accedere alla proprietà "dall'esterno" dell'oggetto, scriviamo un metodo chiamato “getAge" che stampi attraverso echo la proprietà age. Testarne il corretto funzionamento chiamando questo metodo a partire da un oggetto. */

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

        echo $this -> age;
    }
};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@libero.it", "28");



//echo $student3 -> age;

$student1 -> getAge();



?>