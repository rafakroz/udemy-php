<?php

/*
RESGATANDO ELEMENTOS DE ARRAY

• Com a função array_slice podemos resgatar uma faixa de elementos de um array;

• Passamos 3 parâmetros: o array, índice inicial e quantos elementos
queremos resgatar a partir do índice.

*/

$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

print_r($arr);
echo "<br><br>";

//------------------------------------

$slice1 = array_slice($arr, 1, 3);

echo "Indíce 1, 3 elementos: <br>";
print_r($slice1);
echo "<br><br>";

//------------------------------------

$slice2 = array_slice($arr, 4, 4);

echo "Indíce 4, 4 elementos: <br>";
print_r($slice2);
echo "<br><br>";

//------------------------------------

$slice3 = array_slice($arr, 4); //omitindo o último parâmetro, irá até o final

echo "Indíce 4, sem definir quantidade de elementos: <br>";
print_r($slice3);
echo "<br><br>";

//------------------------------------

$slice4 = array_slice($arr, 4, -3); //valor negativo, irá subtrair a qtd de elementos do total

echo "Indíce 4, -3 elementos do fim: <br>";
print_r($slice4);
echo "<br><br>";