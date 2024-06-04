<?php

/*
EXERCÍCIO 46

• Crie um array multidimensaional com 3 arrays, com 4 elementos cada;

• Imprima todos os elementos de cada um dos arrays;

• Imprima também quando está mudando de array;

*/

$arr = [
    [1, 2, 3, 4],
    [5, 8, 9, 11],
    [34, 40, 27, 50]
];

//Loop no array externo. Array contém 3 elementos
for ($i = 0; $i < count($arr); $i++) {

    // Imprimindo array
    echo "Imprimindo array externo " . ($i + 1) . ": <br>";

    // Imprimindo o array interno
    for ($j = 0; $j < count($arr[$i]); $j++){

        echo $arr[$i][$j] . "<br>";

    }

}