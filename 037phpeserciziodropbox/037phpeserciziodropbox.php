<?php

/* A questo punto vogliamo associare ad ogni studente un elenco di corsi ai quali partecipa, per fare questo dobbiamo:

    - aggiungere una proprietà private $classes alla classe Student dove $classes è un array vuoto, in questo array andremo ad inserire tutti i corsi seguiti dallo studente;
    - aggiungere un metodo "addClass" a Student che permetta di aggiungere un nuovo corso all'array $classes.
    - aggiungere un metodo "printClasses" che stampi: “Lo studente nome_dello_studente segue i corsi: e qui l'elenco di tutti i corsi, separati da virgola oppure da a capo";

Suggerimenti:

    - dichiarazione proprietà array vuoto: private $classes = [];
    - aggiungere un nuovo elemento all'array: $classes[] = $elementoDaAggiungere;
    - stampare l'elenco dei corsi: utilizzate foreach.
*/

class Student {

    public $name;

    public $email;

    private $age;

    private $classes = [];


    public function __construct($nameValue, $emailValue, $ageValue) {

        $this -> name = $nameValue;

        $this -> email = $emailValue;

        $this -> age = $ageValue;

    }


    public function addClass(...$elementoDaAggiungere) {

        $this -> classes = $elementoDaAggiungere;

    }

    public function printClass() {

        echo "Lo studente " .  $this -> name . " segue i corsi: \n";

        foreach($this -> classes as $class) {

            echo "$class \n";
        };

    }

};

$student1 = new Student("Max", "maxattianesekr94@gmail.com", "28");

$student2 = new Student("Roberta", "robertina95kr@libero.it", "28");



//echo $student3 -> age;

$student1 -> addClass("Js", "Php", "Css", "Html");

$student1 -> printClass();


?>