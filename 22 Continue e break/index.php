<?php
require_once "../utils.php";

$names = ['Emerson', 'Douglas', "Mariana", "Stella"];

// Pular a Mariana, for
for ($i = 0; $i < count($names); $i++) {
    if ($i === 2) {
        continue;
    }
    breakLine();
    echo $names[$i];
}

breakLine();

// Parar na Mariana, for
for ($i = 0; $i < count($names); $i++) {
    if ($i === 2) {
        break;
    }
    breakLine();
    echo $names[$i];
}

breakLine();

// Pular a Mariana, foreach
foreach ($names as $key => $name) {
    if ($key === 2) {
        continue;
    }
    breakLine();
    echo $name;
}
