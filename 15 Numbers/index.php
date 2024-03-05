<?php
require_once "../utils.php";

// Numbers

// 34 - integer
// 35.50 - double

echo gettype(35.5);

breakLine();

echo gettype(42);

breakLine();

// A soma ocorre abaixo
$number1 = '34';
echo $number1 + 50;

breakLine();

//Verificação se é número ou não
$number2 = 34;
$number3 = '44';

if(is_numeric($number2) && is_numeric($number3)) {
    echo 'é numérico';
}

breakLine();

//------------- Arredondamento

// Para cima
echo ceil(45.5);

breakLine();

// Para baixo
echo floor(45.5);

breakLine();





