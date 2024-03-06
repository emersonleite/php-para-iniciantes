<?php
require_once "../utils.php";

//------------- String

$str = "Emerson";
$str1 = 'Stela';

echo gettype($str1); // string
breakLine();


//------------- Numbers: integers, float(double)
$int1 = 10;
echo gettype($int1); // integer
breakLine();

$float1 = 3.14;
echo gettype($float1);
breakLine();

//------------- Boolean
$bol = true;
echo gettype($bol);
breakLine();

// arrays
$array1 = [1,2,3,4];
echo gettype($array1);
breakLine();


//------------- Object
class Person{
    public $name;

    function __toString()
    {
        return $this->name;
    }
}

$person = new Person();
$person->name = "Emersom";
echo gettype($person);
breakLine();
echo $person;
breakLine();

//------------- null
$null = null;
echo gettype($null);
breakLine();

//------------- Valor por referência com &

$name = "emerson";
$name1 = &$name; // Passagem da referência
$name = "Marta";

echo $name;
breakLine();
echo $name1;

$name1 = "Debora";
breakLine();

echo $name;
breakLine();
echo $name1;



