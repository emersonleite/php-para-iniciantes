<?php
require_once "../utils.php";

// Boolean - true , false

$name = "Emerson";

if($name){
    echo true;
}

breakLine();

//-------------

$_SESSION['logged'] = false;

$_SESSION['logged'] = true;

if($_SESSION['logged']){
    echo "é verdadeiro";
}

breakLine();

//-------------

for ($i =0; $i<=10; $i++){
    echo $i;
}

breakLine();

//-------------

$name1 = "Emerson";
$age = 42;
$logged = false;

if($name1 && $age > 18 && !$logged){
    echo 'verdade';
} else {
    echo 'falso';
}




