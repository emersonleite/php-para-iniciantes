<?php
require_once "../utils.php";

$numero = 10;
$numero2 = 20;

// Soma
echo $numero + $numero2;
breakLine();

// Subtração
echo $numero - $numero2;
breakLine();

// Multiplicação
echo $numero * $numero2;
breakLine();

// Divisão
echo $numero / $numero2;
breakLine();

// Resto
echo $numero % $numero2;

breakLine();

// Precedência de operadores
$operacao = $numero + $numero2 * 5;

$operacao2 = ($numero + $numero2) * 5;
echo $operacao;
breakLine();
echo $operacao2;

// Pode se atribuir dessa forma
$numero3 = 5;
$numero3 *=3;

breakLine();
echo $numero3;