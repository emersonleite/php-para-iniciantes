<?php

$name = "Emerson";

// 1 para existe e 0 para não existe
echo isset($name);

$name2 = null;

// retorna vazio
echo isset($name2);

// vale também para arrays
$person = ['name'=> "Emerson", "age" => 20];

// 1
echo isset($person['name']);

// 0
echo isset($person['address']);
