<?php

// destruir sessão
// session_destroy();

// acabar com sessão específica
// unset($_SESSION['name']);

echo (isset($_SESSION['nome'])) ? "Sessão existe - " . $_SESSION['nome'] : "Sessão não existe";

echo "\n";

(isset($_SESSION['person'])) ? var_dump($_SESSION['person']): "Sessão não existe";
