<?php
require_once "../utils.php";

// incremento/ decremento

$numero = 5;

echo ++$numero; // pré incremento -> 6

breakLine();

echo $numero++; // pós incremento -> 6

breakLine();

echo $numero; // -> 7

# O mesmo acontece para operações de subtração