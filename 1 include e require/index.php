<?php

$name = "Emerson";

# Permite a execução do código depois da linha de include em caso de erro
include "./include.php";

# Não permite a execução
require "./require.php";

# inclui uma vez somente
include_once "./include_once.php";


# Permite a execução do código depois da linha de include em caso de erro
require_once "./require_once.php";



echo $name;
echo $name1;
echo $name2;
echo $name3;
echo $name4;
echo $name5;