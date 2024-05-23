<?php

/*
DIFERENÇAS ENTRE DATAS

• Podemos calcular a diferença entre duas dataas com o método diff;

• O resultado pode ser formatado com format;

    Exemplo:
        $diferenca = $dateA->diff($dateB);
*/

$dataA = new DateTime(); // já retorna a data atual

$dataB = new DateTime();

$dataB->setDate(1933, 06, 02);

print_r($dataA);

echo "<br>";

print_r($dataB);

echo "<br>";

// ---

$diferenca = $dataA->diff($dataB);

print_r($diferenca);

echo "<br>";

// Diferença em dias

echo $diferenca->format("%a days");

echo "<br>";