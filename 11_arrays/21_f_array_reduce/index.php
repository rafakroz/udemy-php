<?php

/*
REDUCE EM ARRAYS

• A função array_reduce tem como objetivo reduzir um arrya a apenas um valor;

• Podemos passar uma segunda função como parâmetro, para algum processo ser executado;

    array_reduce($arr, "função");

*/

$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function soma ($a, $b) {

    return $a + $b;

}

function subtracao ($a, $b) {

    return $a - $b;

}

$resultadoSoma = array_reduce($arr, "soma");

echo "A soma de todos os itens é: " . $resultadoSoma . "<br><br>";

$resultadoSub = array_reduce($arr, "subtracao");

echo "A soma de todos os itens é: " . $resultadoSub . "<br><br>";

