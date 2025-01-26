<?php


class Config2 {
    const PATH_TO_SQLITE_FILE = 'customers3.db';
}

function connection(): PDO
{
    return new PDO("sqlite:" . Config2::PATH_TO_SQLITE_FILE,"", "", [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);
}

$db = connection();

// Crieando tabela customers
$db->exec("CREATE TABLE IF NOT EXISTS customers (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
  );");

// inserindo pessoas
 //$db->exec("insert into customers(id, name, email) values(1, 'John Doe', 'john.doe@example.com') ");
 //$db->exec("insert into customers(id, name, email) values(2, 'Mary Adams', 'mary.ad@example.com') ");
// $db->exec("insert into customers(id, name, email) values(3, 'Mary Adams', 'mary.ad@example.com') ");

//$db->exec("insert into customers(id, name, email) values(4, 'Cure Adams', 'cure.ad@example.com') ");

$db->exec("insert into customers(id, name, email) values(6, 'Cure Cureto', 'cure.ad@example.com') ");

$query = $db->query("SELECT * FROM customers");
$users = $query->fetchAll();

// var_dump($users);

foreach ($users as $user) {
    echo $user->name . "<br>";
}