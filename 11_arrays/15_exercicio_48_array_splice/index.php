<?php

/*
EXERCÍCIO 48

• Crie um array ocm os valores: batata, maçã, pera, feijão, arroz;

• Remova pera e feijão.

*/

$alimentos = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

echo "Array orignal: <br>";
print_r($alimentos);
echo "<br><br>";

//-------

$itensRemovidos = array_splice($alimentos, 2, 2);

echo "Itens removidos do array: <br>";
print_r($itensRemovidos);
echo "<br><br>";

//-------

echo "Array atualizado: <br>";
print_r($alimentos);
echo "<br><br>";