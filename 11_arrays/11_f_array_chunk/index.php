<?php

/*
DIVIDINDO ARRAYS

• Com a função array_chunk, podemos dividir um array grande em
diversos arrays de elementos iguais;

• Passamos o arrya como argumento e também o número de elementos
que cada array de ter

*/

$arr = range(1, 20); //Array de 1 a 20

print_r(array_chunk($arr, 4)); //Dividir o array em arrays com 4 elementos cada
echo "<br><br>";

$arrays = array_chunk($arr, 10); // Dividir o arrya em arrays com 10 elementos cada

print_r($arrays);
echo "<br><br>";

print_r($arrays[1]); // Exibindo apenas o segundo array
echo "<br><br>";