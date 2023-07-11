<?php

/* Vogliamo adesso limitare a 3 il numero massimo di corsi ai quali uno studente può essere iscritto, quindi:

    - creare, nella classe Student, una costante CLASSES_MAX che sarà uguale a 3;
    - modificare il metodo addClass, in modo che aggiunga un nuovo corso solo se non si è superato il limite di 3 (CLASSES_MAX), in caso contrario, se si prova aggiungere un nuovo elemento, stampare: Hai raggiunto il numero massimo di corsi.
    

Suggerimenti: la funzione count($array) vi restituisce il numero di elementi attualmente presenti nell'array */



class Student {

    private const MAX_CLASSES = 3;

    public $name;

    private $email;

    private $age;

    private $classes = [];

    function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }

    function addClasses($elementoDaAggiungere) {

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
    }

}

$student = new Student("Max", "maxattianesekr94@gmail.com", 28);

echo $student -> name . "\n";

$student -> addClasses("Php");

$student -> addClasses("Js");

$student -> addClasses("Html");

$student -> addClasses("Css");


$student -> printClasses();

?>