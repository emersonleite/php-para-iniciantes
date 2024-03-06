<?php


class Config {
    const PATH_TO_SQLITE_FILE = 'customers.db';
}

function connection(): PDO
{
   return new PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE,"", "", [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);
}

function getData($table): bool|array
{
    $connection = connection();
    $query = $connection->query("SELECT * FROM $table");
    $query->execute();
     return $query->fetchAll();
}

var_dump(getData('customers'));


