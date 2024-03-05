<?php
require_once "../utils.php";

$arr = [1,2,3,4,5,6,7,8,9];

//------------- Push
array_push($arr, 10,11);

var_dump($arr);


//------------- Filter
$arr2 = array_filter($arr, function($v){
    return $v > 3 & $v <8;
});

var_dump($arr2);


//------------- Map
$arr3= array_map(function($v){
    return $v * 2;
}, $arr) ;

var_dump($arr3);


//------------- Spread
$arr4 = [...$arr2, ...$arr3];

var_dump($arr4);


//------------- Definindo de outra forma
$data = array("Emerson", "John", "Doe", 34, true);

//------------- Mostrando com print_r
print_r($data);

//------------- Mostrando com print_r
var_dump($data);

//------------- Resgatando um valor de índice 1
var_dump($data[1]);

//------------- Mudando um elemento na posição 0
$data[0] = "Stella";

var_dump($data[0]);

//------------- Contando numero de elementos
$length = count($data);

//------------- Adicionando no começo, sem trocar elemento
array_unshift($data, "Marta");

var_dump($data);

//------------- Indices específicos, inclusive strings
$person = ['name' => 'Stella', 'age' => 14];
var_dump($person['name']);

//------------- Multidimensionais
$person = ['name' => 'Stella', 'age' => 14, 'documents'=> ['cpf' => '123.456.789-10', 'rg' => '123.456.789-10']];
$field = 'documents';
var_dump($person[$field]['cpf']);




