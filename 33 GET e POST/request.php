<?php


var_dump($_REQUEST);

// http://localhost:8082/request.php?ola=mundo
// Resultado:
// array(1) { ["ola"]=> string(5) "mundo" }

var_dump($_REQUEST['name']);

var_dump($_REQUEST['email']);