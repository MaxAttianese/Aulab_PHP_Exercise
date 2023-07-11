<?php

/* Creare una proprietà statica "public static $students = 0" che sarà incrementata ogni volta che viene creato un nuovo oggetto di tipo Student. Questo incremento lo facciamo nel costruttore, incrementando, appunto, di 1 la variabile $students. Dopo aver creato la proprietà, creare un numero di oggetti a piacere della classe Student e successivamente stampare, tramite echo, la proprietà statica $students */


class Student {

    private const MAX_CLASSES = 3;

    public $name;

    private $email;

    private $age;

    private $classes = [];

    public static $student = 0;

    function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

        self :: $student++;


    }

    /*function addClasses($elementoDaAggiungere) {

        if (count($this -> classes) < self :: MAX_CLASSES) {

            $this -> classes[] = $elementoDaAggiungere;

        }
        else{

            echo "Non puoi iscrirti al corso " . $elementoDaAggiungere . " hai raggiunto il numero massimo di corsi \n";
        }
    }

    function printClasses() {

        echo "lo studente " . $this -> name . " segue i corsi: \n";

        foreach($this -> classes as $class) {

            echo "$class \n";
        }
    }*/

}

$student1 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 1

$student2 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 2

$student3 = new Student("Max", "maxattianesekr94@gmail.com", 28); // 3


echo Student :: $student;


?>