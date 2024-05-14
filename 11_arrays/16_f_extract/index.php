<?php

/*
CRIANDO VARIÁVEIS COM EXTRACT

• Com a função extract podemos criar variáveis rapidamente de arrays associativos;

• O nome da chave será o nome da variável;

• Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita.

*/

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr); //criando variáveis a partir de cada chave

echo $cor . "<br>";
echo $forma . "<br>";
echo $material . "<br>";

echo "<br>-------------------------------------------------<br><br>";

$nome = "Matheus"; //variável antes do extract

$pessoa = [
    'nome' => 'Fred',
    'idade' => 2
];

echo 'Variável $nome, antes do extract: ' . $nome . "<br>";

extract($pessoa);

echo 'Variável $nome, após do extract: ' . $nome . "<br>";
//Já existia a variável nome, e como o extract gerou outra, com mesmo nome, sobrescreveu