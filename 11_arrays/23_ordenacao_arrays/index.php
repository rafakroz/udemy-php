<?php

/*
ORDENAÇÃO DE ARRAYS

• Com a função sort, podemos ordenar um array em ordem crescente;

• Com a função rsort, a ordenação fica inversa.

*/

$arr1 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

echo "Array 1 (inteiros) original: <br>";
print_r($arr1);

echo "<br><br>";

sort($arr1);

echo "Array 1 (inteiros) ordenado com sort: <br>";
print_r($arr1);

echo "<br><br>";

// ---------------------------------------------------------

$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

echo "Array 2 (inteiros) original: <br>";
print_r($arr2);

echo "<br><br>";

rsort($arr2);

echo "Array 2 (inteiros) ordenado com rsort: <br>";
print_r($arr2);

echo "<br><br>";

// ---------------------------------------------------------

$arr3 = ['Rafael', 'Fred', 'Suzy', 'Ester', 'Solange', 'Nina'];

echo "Array 3 (strings) original: <br>";
print_r($arr3);

echo "<br><br>";

sort($arr3);

echo "Array 3 (strings) ordenado com sort: <br>";
print_r($arr3);

echo "<br><br>";

/*
No caso das strings, caracteres acentuados, tem outro peso.

João e José, por exemplo. José viria antes de João.
*/