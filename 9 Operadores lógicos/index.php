<?php
require_once "../utils.php";

// && (and), || (or), ! (negação)


$canAcesso = true;
$isOlder = false;

$resultado = $canAcesso && $isOlder;
$resultado2 = $canAcesso || $isOlder;

var_dump($resultado); // false

breakLine();

var_dump($resultado2); // true

breakLine();

var_dump(!$resultado); // true