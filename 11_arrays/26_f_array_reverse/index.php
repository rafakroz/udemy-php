<?php

/*
INVERTENDO ARRAYS

•  Com a função array_reverse podemos obter o array ao inverso;

• Passamos apenas o array como argumento;

• O retorno será um array invertido do original.

*/

$arr1 = [1, 2, 3, 4, 5,];

$arr1Rev = array_reverse($arr1);

echo "Array 1 original: <br>";
print_r($arr1);
echo "<br><br>";

echo "Array 1 reverso: <br>";
print_r($arr1Rev);
echo "<br><br>";

echo "---------------------------------------- <br><br>";

$arr2 = ['Rafael', 12, true, [1, 2]];

$arr2Rev = array_reverse($arr2);

echo "Array 2 original: <br>";
print_r($arr2);
echo "<br><br>";

echo "Array 2 reverso: <br>";
print_r($arr2Rev);
echo "<br><br>";