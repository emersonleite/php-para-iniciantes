<?php
declare(strict_types=1);

//---------------- Criando validação, uso de is_callable, call_user_func
$var = 12;

$biggerTen = function ($num) {
    return $num > 10;
};

$differTwenty = function ($num) {
    return $num !== 20;
};

$valArray = [$biggerTen, $differTwenty];

function validateEntry(int $entry, array $valArrayList) : bool{
    foreach ($valArrayList as $value) {
        if (is_callable($value) && !call_user_func($value, $entry)) {
            return false;
        }
    }
    return true;
}

echo validateEntry($var,$valArray);


//---------------- Teste com Reduce
$ar = [1, 2, 3];

echo array_reduce($ar, function ($acc, $curr) {
    return $acc + $curr;
}, 0);





