<?php

/*
DIFERENÇA ENTRE ARRAYS

• Podemos verificar qual a diferença entre dois ou mais arrays com PHP;

• A função que vamos utilizar para isso é a array_diff;

• Esta função aceita um número indeterminado de arrays;

• Compara o primeiro array no argumento, com os demais.

*/

$arr1 = [1, 2, 3];

$arr2 = [2, 4, 6];

$diff1 = array_diff($arr1, $arr2);

print_r($diff1);
echo "<br><br>";

// --------------------

$diff2 = array_diff($arr2, $arr1);

print_r($diff2);
echo "<br><br>";

// --------------------

$arr3 = [4];

$diff3 = array_diff($arr2, $arr1, $arr3);

print_r($diff3);
echo "<br><br>";