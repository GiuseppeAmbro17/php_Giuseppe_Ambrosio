<?php

class Company {

public $name;
public $location;
public $tot_employees;
public static $avg_wage = 1500;



 public function __construct($_name, $_location, $_tot_employees) {
    $this->name = $_name;
    $this->location = $_location;
    $this->tot_employees = $_tot_employees;
    self::$avg_wage++;

}

public function introduceYou() {

    echo "L ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti";

}

public function totalExpense() {

    echo "L azienda $this->name ha una spesa complessiva di $avg_wahge per ogni $this->tot_employees";
}

}


$company1 = new Company ("Nike", "UK", 10);

//var_dump ($company1);

$company2 = new Company ("Amazon", "USA", 20);

//var_dump ($company2);

$company3 = new Company ("Bethesda", "Canada", 5);

//var_dump ($company3);

$company4 = new Company ("Haribo", "Slovenia", 7);

//var_dump ($company4);

$company5 = new Company ("Aulab", "Italia", 50);

//var_dump ($company5);

//$company5->introduceYou();























?>