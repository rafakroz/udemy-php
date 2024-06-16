<?php

/*
ADICIONANDO VALOR AO FIM DO ARRAY

• Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice;

• O valor atribuído será enviado para o último e novo índice do array:

    $arr[] = 5;

*/


$arr = [1, 2, 3];

$arr[] = 4;

print_r($arr);
echo "<br>";

$arr[] = 4;

print_r($arr);
echo "<br>";

$arr[] = 5;

print_r($arr);
echo "<br><br>";

//--------------------------------

$arr2 = [];

$arr2[] = 1;

print_r($arr2);
echo "<br><br>";

//--------------------------------

$arr3 = [];

$arr3['teste'] = "testando";

print_r($arr3);