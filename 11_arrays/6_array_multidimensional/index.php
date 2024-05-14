<?php

/*
ARRAY MULTIDIMENSIONAL / MATRIZ

• Quando inserimos arrays dentro de arrays formamos um array multidimensaional,
tmbém conhecido como matriz;

• Para acessar este tipo de array também utilizamos índices, acessando os externos
e depois os internos;

Exemplo: $arr[1][0] -> [0]vPrimeiro elemento do [1] segundo array

*/

$arr = [
    [1, 2, 3],
    [8, 9, 10]
];

print_r($arr);
echo "<br><br>";

//-------------------

echo "Array 1, elemento 2: " . $arr[0][1] . "<br><br>";
// Primeiro array, segundo elemento: 2

echo "Array 2, elemento 3: " . $arr[1][2] . "<br><br>";
// Segundo array, terceiro elemento: 10

//-------------------

echo "Quantidade de elementos do array: " . count($arr) . "<br><br>";
// O resultado será 2, pois, cada array conta como um elemento

echo "Quantidade de elementos do primeiro array interno: " . count($arr[0]) . "<br><br>";
// O resultado será a quantidade de elementos do primeiro array