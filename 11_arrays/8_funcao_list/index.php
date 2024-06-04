<?php

/*
CRIANDO VARIÁVEIS COM A FUNÇÃO LIST

• Podemos criar muitas variáveis com base em um array com a função list.

Exemplo: list($nome, $idade, $profissao) = $pessoa;

*/

$celular = ["Apple", "Pro Max", 2020, "256bg", "Dourado"];

print_r($celular);
echo "<br><br>";

list($marca, $modelo, $anoLancamento, $armazenamento, $cor) = $celular;

echo "Marca: " . $marca . "<br>";
echo "Modelo: " . $modelo . "<br>";
echo "Ano de Lançamento: " . $anoLancamento . "<br>";
echo "Armazenamento: " . $armazenamento . "<br>";
echo "Cor: " . $cor . "<br>";