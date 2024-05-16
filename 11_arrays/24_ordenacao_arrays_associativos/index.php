<?php

/*
ORDENAÇÃO DE ARRAYS ASSOCIATIVOS

• Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função asort;

• Para ordenar o array pelas chaves, podemos utilizar o valor ksort.
*/

$arr1 = [
    'Rafael' => 40,
    'Ester' => 91,
    'Solange' => 60,
    'Fred' => 3,
    'Suzy' => 7,
    'Nina' => 4
];

echo "Array Associativo 1 original: <br>";
print_r($arr1);

echo "<br><br>";

asort($arr1); // valor contido nas chaves

echo "Array Associativo 1 ordenando valores com asort: <br>";
print_r($arr1);

echo "<br><br>";

arsort($arr1); // valor contido nas chaves

echo "Array Associativo 1 ordenando valores (reverso) com arsort: <br>";
print_r($arr1);

echo "<br><br>";
echo "---------------------------------------------------------------<br>";
echo "<br>";

$arr2 = [
    'Rafael' => 40,
    'Ester' => 91,
    'Solange' => 60,
    'Fred' => 3,
    'Suzy' => 7,
    'Nina' => 4
];

echo "Array Associativo 2 original: <br>";
print_r($arr2);

echo "<br><br>";

ksort($arr2); // valor contido nas chaves

echo "Array Associativo 2 ordenando chaves com ksort: <br>";
print_r($arr2);

echo "<br><br>";

krsort($arr2); // valor contido nas chaves

echo "Array Associativo 2 ordenando chaves (reverso) com krsort: <br>";
print_r($arr2);