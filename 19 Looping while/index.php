<?php

$names = ['Emerson','Douglas', "Mariana", "Stella"];

$index = 0;

// Sem chaves
foreach($names as $name){
    echo $name;
}

// Com chaves
foreach($names as $key => $name){
    echo $key . '=>' . $name ;
}

