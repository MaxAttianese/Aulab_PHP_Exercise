<?php

/* Creare una classe “Student" che abbia:

    - 3 proprietà con visibilità “public": name, email, age (nome, email, età);
    - un costruttore che, in fase di creazione di un oggetto, assegni i parametri passati al costruttore alle relative proprietà (name, mail, age). */

    class Student {

        public $name;

        public $email;

        public $age;

        public function  __construct($nameValue, $emailValue, $ageValue) {

            $this -> name = $nameValue;

            $this -> email = $emailValue;

            $this -> age = $ageValue;

        }
    };

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

var_dump($student1);


?>