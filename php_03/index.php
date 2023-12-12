<?php

$firstRule = false;

$secondRule = false;

$thirdRule = false;

$fourthRule = false;

//andiamo ad inizializzare le variabili con esito false perché se l'esito nella condizione esplicata dà come esito true allora la regola è rispettata.

$password = readline("Inserisci password: ");

//Prima Regola

if (strlen($password) >=8) {
    $firstRule = true;
} else {

    $firstRule = false;
}

var_dump($firstRule);


//Seconda Regola

for ($i=0; $i < strlen($password); $i++) { 

if (is_numeric($password[$i])) {
    $secondRule = true;
    break; 
} 

}

var_dump($secondRule);


//Terza Regola

for ($i=0; $i < strlen($password); $i++) { 

    if (ctype_upper($password[$i])) {
        $thirdRule = true;
        break; 
    } 
    
    }

    var_dump($thirdRule);


    //Quarta Regola

    $specialCharacters = ['/', '[', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')','.', '?', '"', '.', ':', '{', '}', '|', '<', '>', ']',];

    for ($i=0; $i < count($specialCharacters); $i++) { 
        if (in_array($password[$i], $specialCharacters)) {
            $fourthRule = true;
            break;
        }
    }

    var_dump($fourthRule);









































?>