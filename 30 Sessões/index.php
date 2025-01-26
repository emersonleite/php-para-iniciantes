<?php

// Iniciar sessão
session_start();

// Regenerar sessão -> muda a cada reload
// session_regenerate_id();



// Criar sessão
$_SESSION['nome'] = "Emerson";
$_SESSION['person'] = ['name' => "Stella", 'age' => 30];

require "teste.php";