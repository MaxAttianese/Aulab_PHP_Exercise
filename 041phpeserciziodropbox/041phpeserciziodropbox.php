<?php

/* Modificare l'esercizio 2 in modo che i tre oggetti creati, non siano più delle singole variabili, ma elementi di un array $students.
Stampare attraverso "echo":

    -     la proprietà name del primo oggetto;
    -     la proprietà name del secondo oggetto;
    -     la proprietà email del secondo oggetto;
    -     la proprietà age del terzo oggetto. */



class Student {

    public $student;


    public function createArrayStudent($firstnameValue, $emailValue, $ageValue) {

        $this -> student["studente"] = [

            "Name" => $firstnameValue,

            "Email" => $emailValue,

            "Age" => $ageValue,

        ];
    }

}

$student1 = new Student;

$student1 -> createArrayStudent("Max", "maxattianesekr94@gmail.com", 28);

$student2 = new Student;

$student2 -> createArrayStudent("Vinicius", "viniciusexample@gmail.com", 24);

$student3 = new Student;

$student3 -> createArrayStudent("Rocco", "roccoexample@gmail.com", 25);

var_dump($student1);

var_dump($student2);

var_dump($student3);


echo $student1 -> student["studente"]["Name"] . "\n";

echo $student2 -> student["studente"]["Name"] . "\n";

echo $student2 -> student["studente"]["Email"] . "\n";

echo $student3 -> student["studente"]["Age"] . "\n";


?>