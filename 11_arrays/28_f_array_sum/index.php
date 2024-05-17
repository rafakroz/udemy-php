<?php

/*
SOMANDO ITENS DE UM ARRAY

• Com a função array_sum, é possível somar os itens de um array;

• Ela nos retorna a soma de todos os elementos numéricos do array que passamos como argumento.

*/

$arr = [2, 4, 34, 34.1, 324, 12, 34, 1];

$soma = array_sum($arr);

print_r($arr);

echo "<br><br>";

echo $soma;

// caso haja string no array, a função irá considerar apenas números e somá-los