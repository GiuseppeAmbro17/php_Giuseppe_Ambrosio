<?php

//Traccia 1


/* $users = [
    ['name' => 'Giuseppe', 'surname' => 'Ambrosio', 'gender' => 'Male'],
   
    ['name' => 'Cristina', 'surname' => 'Di Gregorio', 'gender' => 'Female'],
   
    ['name' => 'Marko', 'surname' => 'Kostic', 'gender' => 'Male'],
];

foreach($users as $person) {

        if ($person['gender'] === 'Male') {

            echo 'Buongiorno Sig.' . $person['name'] . ''. $person['surname'] . "\n";

        } else echo 'Buongiorno Sig.ra '. $person['name']. '' . $person['surname'] . "\n";
}

echo($person); */


/* //Traccia 2


$numbers = [1, 3, 5, 4, 6, 8,];
$pairNumbers = [];

for ($i=0; $i < count($numbers) ; $i++) { 

        if ($numbers[$i] % 2 === 0) {
            array_push($pairNumbers, $numbers[$i]);
        }
}

var_dump($pairNumbers);

var_dump(array_sum($pairNumbers)/count($pairNumbers)); */



//Traccia 3

$numbers = 100;

 for ($i=0; $i <=100; $i++) { 
    if ($i % 3 === 0)
        var_dump('PHP');
    else if ($i % 5 === 0) 
        var_dump('JAVASCRIPT');
    else if ($i % 3 === 0 && $i % 5 === 0)
        var_dump('HACKADEMY');
    else var_dump($i % 3 !== 0);

}




























?>