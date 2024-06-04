<?php

/*
VERIFICANDO SE O VALOR EXISTE

• COm a função array_keys_exists podemos verificar se há um valor em
uma respectiva key de um array;

• Podemos fazer essa checagem em um if:

    Exemplo: array_key_exists("nome, $arr)

• Outra função que podemos utilizar para este fim é a isset.

*/

$arr = [
    'marca' => 'Apple',
    'modelo' => 'Pro Max',
    'armazanamento' => '256gb'
];

print_r($arr);
echo "<br><br>";

$x1 = "marca";
$x2 = "cor";
$x3 = 2020;
$x4 = 'teste';

if (array_key_exists($x1, $arr)) {

    echo "IF com array_key_exists: <br>";
    echo "A chave (" . $x1 . ") existe! <br><br>";
    
} else {
    
    echo "IF com array_key_exists: <br>";
    echo "A chave (" . $x1 . ") não existe! <br><br>";
    
}

if (array_key_exists($x2, $arr)) {
    
    echo "IF com array_key_exists: <br>";
    echo "A chave (" . $x2 . ") existe! <br><br>";
    
} else {
    
    echo "IF com array_key_exists: <br>";
    echo "A chave (" . $x2 . ") não existe! <br><br>";

}

// ISSET ----------------------------------------------------

if (isset($arr['marca'])){
    
    echo "IF com isset: <br>";
    echo "A chave (" . $x1 . ") existe! <br><br>";
    
} else {
    
    echo "IF com isset: <br>";
    echo "A chave (" . $x1 . ") não existe! <br><br>";
    
}

if (isset($arr[$x4])){
    
    echo "IF com isset: <br>";
    echo "A chave (" . $x4 . ") existe! <br><br>";
    
} else {
    
    echo "IF com isset: <br>";
    echo "A chave (" . $x4 . ") não existe! <br><br>";
    
}

// ISSET ----------------------------------------------------
//isset funcionar com variáveis também. Verificar se foi declarada, por exemplo.


if (isset($x5)){
    
    echo "IF com isset: <br>";
    echo 'A var $x5 existe! <br><br>';
    
} else {
    
    echo "IF com isset: <br>";
    echo 'A var $x5 não existe! <br><br>';
    
}

if (isset($x4)){
    
    echo "IF com isset: <br>";
    echo 'A var $x4 existe! <br><br>';
    
} else {
    
    echo "IF com isset: <br>";
    echo 'A var $x4 não existe! <br><br>';
    
}