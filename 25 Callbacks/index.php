<?php
require_once "../utils.php";

//------------- Callback - exemplo 1
function teste($name)
{
    return 'Ola meu nome é ' . $name;
}


function teste2($callback)
{
    return $callback('Emerson');
}

echo teste2('teste');

breakLine();

//------------- Callback - is_callable

function teste3($callback)
{
    if(is_callable($callback)){
        return $callback('Emerson');
    } else {
        return 'Não é callback';
    }

}

// Callable que não existe
$call = "Olá";

echo teste3($call);

breakLine();

// Callable que existe
$call = "teste";

echo teste3($call);

breakLine();

//------------- Callback - call_user_func

// Sem parametros
function teste4()
{
    return 'teste';
}

echo call_user_func('teste4');

breakLine();

// Passando parametro para a função
function teste5($name)
{
    return "O nome é $name";
}

echo call_user_func('teste5',"Emerson");

breakLine();

//------------- Callback - Classes

class User {
    public function teste(){
        return 'Emerson Leite';
    }

    public function teste2($name){
        return "$name";
    }

    public function teste3($name, $age){
        return "$name" . " " .$age;
    }

    public static function teste4($name, $age){
        return "$name" . " " .$age;
    }
}

$user = new User();

// Sem pametro
echo call_user_func([$user, 'teste']);

breakLine();

// Com parametro

echo call_user_func([$user, 'teste2'], "Stella Leite");

breakLine();

echo call_user_func([$user, 'teste3'], "Stella Leite", 14);

breakLine();

// Método estático, não precisa instanciar a classe, e passa-se a classe no call_user_func

echo call_user_func(['User', 'teste4'], "Stella Leite", 14);

breakLine();

//------------- Callback - 'call_user_func' dentro de outra função

function teste6(){
    return 'Marta silva';
}

function teste7($callback){
    return call_user_func($callback);
}

echo teste7('teste6');

breakLine();

//------------- Callback - '__invoke' como parâmetro

class User2 {
    public function __invoke()
    {
        return 'Mariana Leite';
    }
}

$user = new User2();

// Poder ser chamado como função por causa do '__invoke'
echo $user();

breakLine();

// Ou
// echo $user->__invoke();

// Passando em uma função
function teste8($callback){
    return $callback();
}

echo teste8($user);

breakLine();

//------------- Callback - 'call_user_func_array', passando arrays

function teste9($name, $age)
{
    return $name . " " .$age;
}

echo call_user_func_array('teste9', ['Mariana', 19]);

breakLine();

//------------- Callback - usar closure como callback

$user3 = function (){
    return 'Mariana from closure';
};

function teste10($callback)
{
    return $callback();
}

echo teste10($user3);

breakLine();

// ou

function teste11($callback)
{
    return call_user_func($callback);
}

echo teste11($user3);


