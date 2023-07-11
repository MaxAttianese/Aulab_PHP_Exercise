<?php

/* Modificare la classe Student. In particolare la visibilità della proprietà age deve essere modificata da public a private.
Provare a stampare la proprietà age di uno dei 3 oggetti creati precedentemente. (In questo caso dovreste ricevere un errore). */

class Student {

    public $name;

    public $email;

    private $age;

    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }
};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@gmail.com", "28");

$student3 = new Student("Vinicius", "vingomes@libero.it", "24");


echo $student3 -> age;

?>