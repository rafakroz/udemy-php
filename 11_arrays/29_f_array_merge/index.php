<?php

/*
UNINDO ARRAYS

• Podemos unir arrays, a ação também é conhecida como merge;

• A função que vamos utilizar é a array_merge;

• Que como argumento aceita um número indeterminado de arrays.

*/

$arr1 = [1, 2, 3];

$arr2 = [1.1, 2.1, 3.1];

$arr3 = [1.3, 2.3, 3.3];

$arrMerge1 = array_merge($arr1, $arr2, $arr3);

print_r($arrMerge1);
echo "<br><br>";

//-------------------------------------------------------------

$arr4 = ['Apple', 'Samsung', 'Huawei'];

$arrMerge2 = array_merge($arr1, $arr2, $arr3, $arr4);

print_r($arrMerge2);
echo "<br><br>";