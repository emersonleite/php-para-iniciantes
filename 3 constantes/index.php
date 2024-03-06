<?php
require_once "../utils.php";

//------------- Definindo uma constante
define("NAME", "Emerson");

// ou
const VERSION = "1.0.0";

echo NAME;

breakLine();

echo VERSION;

breakLine();

//------------- Constante mágica com '__NOME__'
function teste()
{
    echo __FUNCTION__;
    breakLine();
    echo __METHOD__;
}

teste();

breakLine();

echo DIRECTORY_SEPARATOR; // ---->  / , imprime uma barra

breakLine();

//------------- Mostrando as constantes do PHP
$cons = get_defined_constants(true);

var_dump($cons);


