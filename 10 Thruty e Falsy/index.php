<?php
require_once "../utils.php";

// Falsy
// null
// 0
// 0.0
// "0"
// ""
// array()

$name = "Emerson";

$name2 = "";

var_dump(!!$name); // true
breakLine();

var_dump(!!$name2); // false
breakLine();

var_dump(!!0); // false
breakLine();

var_dump(!![]); // false
breakLine();

// true
if (!0) {
    echo "É " . 0;
}
breakLine();
// false
if (!'Emerson') {
    echo "É " . "Emerson";
}

$i = 0;
while ($i <= 10) {
    echo $i;
    breakLine();
    $i++;
}
