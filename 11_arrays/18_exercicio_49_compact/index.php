<?php

/*
EXERCÍCIO 49

• Crie variáveis com características de algum objeto ou animal;

• Depois crie um array com compact com estas mesmas variáveis;

• Faça um loop no array e imprima os valores.

*/

$nome = "Fred";
$animal = "gato";
$cor = "laranja";
$idade = 2;

$animal = compact("nome", "animal", "cor", "idade");

print_r($animal);
echo "<br><br>";

foreach ($animal as $caracteristica => $dado) { //usar foreach com array associativo

    echo ucfirst($caracteristica) . ": " . ucfirst($dado) . ". <br>";

}