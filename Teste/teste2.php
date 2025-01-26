<?php

class TypeR {

    public function __construct(private mixed $type)
    {
        $t = get_class($type);
    }

    public function getType(): string
    {
        return $this->type;
    }
}


class PersonHuman{

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

}

$person = new PersonHuman("Emerson");


var_dump($person);

echo gettype($person);
echo get_class($person);