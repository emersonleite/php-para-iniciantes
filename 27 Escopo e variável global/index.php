<?php

// Escopo global
$name = "Stella";
$age = 18;


function t()
{
    // Para ter acesso a variáveis de escopo global
    global $name;
    echo $name;
    echo "\n";
    // escopo local
}

function t2()
{
    // Para ter acesso a variáveis de escopo global, outra forma
    echo $GLOBALS['age'];
    echo "\n";
}

t();
t2();