<?php

/* Restringir tipos */

declare(strict_types=1);

include_once '../utils.php';

echo 'ola';

echo "<br>";

// Array com identificação
$ar1 = ['1' => '2', '2' => '3'];

print_r($ar1['1']);

echo "<br>";

$ar2 = [1, 2, 3];

print_r($ar2);

echo "<br>";

// Booleano
$t = True;
$t = False;

if ($t) {
  echo 'true';
}

// Função com tipo
function ola(string $e): string
{
  echo $e;
  return $e;
}

ola('True');

for ($i = 0; $i < 10; $i++) {
  echo $i;
  echo "<br>";
}
