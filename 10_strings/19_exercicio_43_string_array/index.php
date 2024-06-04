<?php

/*
EXERCÍCIO 43

• Converta a seguinte string para array:

"carro - navio - helicóptero - barco - jangada"

*/

$lista = "carro - navio - helicóptero - barco - jangada";

$listaArray = explode("-", $lista);

print_r($listaArray);

echo "<br><br>";

for ($i = 0; $i < count($listaArray); $i++) {

    echo "Item " .  $i+1 . ": " . $listaArray[$i] . "<br>";

}