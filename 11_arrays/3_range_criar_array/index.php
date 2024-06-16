<?php

/*
CRIAR ARRAY RAPIDAMENTE

• Podemos utilizar a função range para criar um array de forma rápida;

    range(1, 10);

• Um array de 1 a 10 será criado. Podemos atribuir este valor a uma variável.

*/

$arr1 = range(1, 10); //criação do array em ordem crescente, passo 1

print_r($arr1);
echo "<br><br>";

$arr2 = range(5, 30); //criação a partir de 5

print_r($arr2);
echo "<br><br>";

$arr3 = range(0, 1000, 100); //criação a partir de 0, até 1000, passo 100

print_r($arr3);
echo "<br><br>";