<?php

/* Modificare la proprietà statica $students appena creata, da public a private ed in seguito creare un metodo statico che ci servirà per stampare $students. Testare il metodo statico appena creato, chiamandolo direttamente dalla classe Student (e non dall'oggetto). */



class Student {

    private const MAX_CLASSES = 3;

    public $name;

    private $email;

    private $age;

    private $classes = [];

    private static $student = 0;

    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

        self :: $student++;


    }


    public static function printStudentValue() {

        echo self :: $student;

}

}

$student1 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 1

$student2 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 2

$student3 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 3


Student :: printStudentValue();

?>