<?php

/*
CHAVES E VALORES

• Com a função array_keys recebemos um array apenas com as chaves de um array;

• COm a função array_values recebemos um array apenas com os valores de um array.

*/

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto solar' => true,
    'cambio' => 'Automático',
    'portas' => 4
];

$chaves = array_keys($carro); //chaves do array

print_r($chaves);
echo "<br><br>";

$valores = array_values($carro); //valores do array

print_r($valores);
echo "<br><br>";
