<?php

require '../vendor/autoload.php';
require_once "env-config.php";

// Diretório onde está o index.php
echo __DIR__;

// Mostra dados do servidor
var_dump($_SERVER);

echo $_ENV['NAME'];

