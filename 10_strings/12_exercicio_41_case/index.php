<?php

/*
EXERCÍCIO 41

• Transforme a string: "este item está em promoção";
• Para: "Este item está em PROMOÇÃO";

Obs.: você pode separar as strings, mas não pode escrever em caixa
alta ou baixa manualmente, só com funções.

*/

$textoParte1 = "este item está em";
$textoParte2 = "promoção";

echo $textoParte1 . " " . $textoParte2 . "!";

echo "<br><br>";

//alteração

echo ucfirst($textoParte1) . " " . strtoupper($textoParte2) . "!";