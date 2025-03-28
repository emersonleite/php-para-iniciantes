<?php

$names = ['Emerson', 'Douglas', "Mariana", "Stella"];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "\n";
}

function manipulateArray($item)
{
    return $item . " Leite";
}

$newArray = array_map('manipulateArray', $names);

var_dump($newArray);

echo $newArray[0];

/* $arrayW = ['name' => "Ola"];

echo $arrayW['name']; */
