<?php

$iphone = [
    'marca' => 'apple',
    'modelo' => '12 pro max',
    'ano' => 2020,
    'cor' => 'gold'
];

$galaxy = [
    'marca' => 'samsung',
    'modelo' => 'S23 ultra',
    'ano' => 2023,
    'cor' => 'preto'
];

echo "Item 1: <br>";

foreach ($iphone as $caracteristicas => $valor){

    echo "$caracteristicas => $valor . <br>";

}

echo "<br><br>";

echo "Item 2: <br>";

foreach ($galaxy as $caracteristicas => $valor){

    echo "$caracteristicas => $valor . <br>";

}

echo "<br><br>";

echo "Teste informando apenas 1 argumento: <br>";

foreach ($galaxy as $valor){

    echo "$valor . <br>";

}

// Neste caso, teremos apenas os valores de cada índice.