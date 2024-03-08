<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_FILES);
}

// saída:
//array(1) { ["image"]=> array(6) { ["name"]=> string(12) "profile2.png" ["full_path"]=> string(12)
// "profile2.png" ["type"]=> string(9) "image/png" ["tmp_name"]=> string(53)
// "C:\Users\emerson.leite\AppData\Local\Temp\php76F2.tmp" ["error"]=> int(0) ["size"]=> int(246836) } }