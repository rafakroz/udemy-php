<?php

/*
EXERCÍCIO 47

• Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, automático

• Chame este array de carro;

• Crie variáveis com base neste array.

*/

$carro = ["jaguar", "3.0", "azul", 18, "teto solar", "automático"];

print_r($carro);
echo "<br><br>";

list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

echo "Marca: " . ucwords($marca) . "<br>";
echo "Mortor: " . $motor . "<br>";
echo "Cor: " . ucwords($cor) . "<br>";
echo "Aro: " . $aro . "<br>";
echo "Opcional: " . ucwords($opcional) . "<br>";
echo "Câmbio: " . ucwords($cambio) . "<br>";