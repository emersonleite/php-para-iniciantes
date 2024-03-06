<?php

require_once "../utils.php";

// Resgatando um cookie
echo $_COOKIE['name'];

breakLine();

echo $_COOKIE['name2'];

// Verificando se cookie existe
if(isset($_COOKIE['name2'])){
    echo 'cookie existe';
}



