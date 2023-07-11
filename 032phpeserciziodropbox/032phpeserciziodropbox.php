<?php

/* Utilizzare la classe Student per creare 3 oggetti con nome di variabile e dati a piacere.
Stampare attraverso "echo":

    - la proprietà name del primo oggetto;
    - la proprietà name del secondo oggetto;
    - la proprietà email del secondo oggetto;
    - la proprietà age del terzo oggetto. */


class Student {

    public $name;

    public $email;

    public $age;

    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }
};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@gmail.com", "28");

$student3 = new Student("Vinicius", "vingomes@libero.it", "24");


echo $student1 -> name;

echo "\n";

echo $student2 -> name;

echo "\n";

echo $student2 -> email;

echo "\n";

echo $student3 -> age;

?>