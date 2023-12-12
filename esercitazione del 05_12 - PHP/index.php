<?php

//TRACCIA 1

/* $integer = 2;
$string = 'Ciao sono Giuseppe';
$boolean = false;
$float = 3.2;
 
var_dump($integer,$float.$string,$boolean);
echo $float;

const INTEGER = 2; 
const STRING = 'Ciao sono Giuseppe';
const BOOLEAN = false;
const FLOAT = 3.2; 

var_dump(INTEGER,STRING,BOOLEAN,FLOAT);*/



//TRACCIA 2

/* $text = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = "hai"; 
$text7 = "bevuto";
$text8 = "tutto";

var_dump($text. " " .$text2. " " .$text3. $text4. " " .$text5. " " .$text6. " " .$text7. " " .$text8. '.');
 */


//TRACCIA 3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ],
          ],
        ]
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ],
    'elemento4' => [
        'del',
        'di',
        'per',
    ],
  ];

  var_dump($words1[4],$words1[6][0],$words1[7]);

























?>