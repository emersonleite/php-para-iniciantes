<?php

//------------- Closure - exemplo 1

$person = function ($name){
    return $name;
};

var_dump($person); // object(Closure)#1 (0) {}


var_dump($person("Emerson")); // string(5) "Hello"


//------------- Closure - exemplo 2, utilizando use

function teste($name): Closure
{
    $person = function() use($name) {
        return $name;
    };

    return $person;
}

var_dump(teste("Stella")());





