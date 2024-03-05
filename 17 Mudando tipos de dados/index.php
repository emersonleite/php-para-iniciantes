<?php

//------------- para boolean

$name = "Emerson";

$change = (boolean) $name;

var_dump($change);


//------------- para string

$age = 48;

$change2 = (string) $age;

var_dump($change2);


//------------- para float

$age2 = "48.80";

$change3 = (float) $age2;

var_dump($change3);


//------------- para inteiro

$age3 = 48.80;

$change4 = (integer) $age3;


var_dump($change4);


//------------- para objeto stdClass

$nomes = ["Emerson", "John", "Doe"];

$change5 = (object) $nomes;

var_dump($change5);

// ou de array (com indice personalizado) para objeto

$data = ['name'=> "Emerson", 'age'=> 30];

$change6 = (object) $data;

var_dump($change6->name);


//------------- de objeto para array
class Pessoa
{
    private $name = "Mariana";
    public function teste(){
        return 'teste';
    }
}

$pessoa = new Pessoa();

$change7 = (array) $pessoa;

var_dump($change7);


//------------- para boolean com a função boolval
// Há os correspondentes para intval, floatval, doubleval, strval

$person1 = "Emerson";

$change8 = boolval($person1);

var_dump($change8);












