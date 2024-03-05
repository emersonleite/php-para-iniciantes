<?php

require_once "../utils.php";

$name = "Mariana";

echo gettype($name);

breakLine();

//-------------

$name2 = 'Maria';

echo gettype($name2);

breakLine();

//-------------

$age = 60;

$name4 = 'Marta Bu';

echo "$name4 - $age";

breakLine();

echo '$name4 - $age';

breakLine();

//------------- Utilizando {}

echo "{$name4} outro texto etc... {$age}";
breakLine();

//------------- Contando caracteres

echo strlen($name4);
breakLine();

//------------- Mostrando substrings
echo substr("Esse é um texto de teste para pegar parte dele", 0, 15); // -> Esse é um text
breakLine();

//------------- Mostrando se uma string contém alguma coisa

echo str_contains("Emerson Leite", "Emer"); // 1 para true e 0 para false -> 1


