<?php

/*
ADICIONANDO DADOS A UM ARRAY

• Podemos criar novos índices com dados em um array;

• Basta por o nome do array com o novo índice em colchete e atribuir um valor;

    $arr[1] = "teste";

• E em arrays associativos basta utilizar o nome da nova chave com a atribuição de valor.

*/

$arr = []; //criando um array vazio

print_r($arr);
echo "<br>";

// Adicionando valores

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[2] = 25;

print_r($arr);
echo "<br>";

// Modificar valores

$arr[1] += 55;  //somando ao valor existente

print_r($arr);
echo "<br>";
echo "<br>";

//Array associativo ----------------------

$arrAssoc = [];

print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["aviao"] = "Boeing";

print_r($arrAssoc);
echo "<br>";

//alterando
$arrAssoc["carro"] = "Ferrari";

print_r($arrAssoc);
