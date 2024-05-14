<?php

/*
REMOVENDO ELEMENTOS

• Com a função array_splice, podemos remover elementos de um array;

• Passamos como parâmetro o array, índice e quantos elementos queremos remover:

    Exemplo: array_splice($arr, 2, 1) -> A partir de índice 2, remove 1 elemento

*/

$arr1 = [1, 2, 3 , 4, 5, 6];

echo "Array 1 base: <br>";
print_r($arr1);
echo "<br><br>";

$removidos1 = array_splice($arr1, 1, 2);
//array base, a partir de qual índice, quantos elementos remover

echo "Array 1 alterado: <br>";
print_r($arr1); // O array será exibido atualizado
echo "<br><br>";

echo "Itens removidos do array 1: <br>";
print_r($removidos1); // Exibindo os itens excluídos do array
echo "<br><br>";

echo "-------------------------------------------------------------------<br><br>";

$arr2 = [1, 2, 3 , 4, 5, 6];

echo "Array 2 base: <br>";
print_r($arr2);
echo "<br><br>";

$removidos2 = array_splice($arr2, 3);
// Caso o terceito argumento (qtd) não seja definido, excluirá até o fim

echo "Array 2 alterado: <br>";
print_r($arr2); // O array será exibido atualizado
echo "<br><br>";

echo "Itens removidos do array 2: <br>";
print_r($removidos2); // Exibindo os itens excluídos do array
echo "<br><br>";

echo "-------------------------------------------------------------------<br><br>";

$arr3 = [1, 2, 3 , 4, 5, 6];

echo "Array 2 base: <br>";
print_r($arr3);
echo "<br><br>";

$removidos3 = array_splice($arr3, 1, -1);
// Argumento negativo também é possível

echo "Array 2 alterado: <br>";
print_r($arr3); // O array será exibido atualizado
echo "<br><br>";

echo "Itens removidos do array 2: <br>";
print_r($removidos3); // Exibindo os itens excluídos do array
echo "<br><br>";