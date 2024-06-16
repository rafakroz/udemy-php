<?php

$estados = [
    'SP' => 'São Paulo',
    'MG'=> 'Minhas Gerais',
    'RJ'=> 'Rio de Janeiro',
    'ES'=> 'Espírito Santo',
];

foreach ($estados as $sigla => $nome) {
    echo $nome . ' - ' . $sigla . '<br>';
}

echo '<br><br>';

foreach ($estados as $sigla => $nome) {
    echo $nome . '<br>';
    }

echo '<br><br>';

foreach ($estados as $sigla => $nome) {
    echo $sigla . '<br>';
    }

echo '<br><br>';