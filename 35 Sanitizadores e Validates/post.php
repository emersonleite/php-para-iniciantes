<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){




    // SANITIZERS
    // Filter input para dados vindos do formulário -> filter_input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    var_dump($name);
    var_dump($email);

    // Para entradas
    // <script>alert("ola')</script>
    //emerson.bl@gmail.com

    // As saídas
    // string(20) "alert("ola')" string(20) "emerson.bl@gmail.com"

    //-------------------------------------------------------------

    // VALIDATORS
    $emailValid = false;

    // Para variáveis filter_var
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailValid = true;
    }
    echo $emailValid ? "email valid" : "email invalid";

}
