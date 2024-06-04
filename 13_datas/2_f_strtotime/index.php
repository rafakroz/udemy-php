<?php

/*
FUNÇÃO STRTOTIME

• Recebe uma string como parâmetro, que é um texto sinalizando tempo;

• A função tenta interpretar e trnasformar em data;

• Veja um exemplo de utilização:

    echo date('d/m/y', strtotime('+2 years'));

*/

// Dias

$cincoDias = strtotime("5 days");

echo "Representação do momento atual até 5 dias adiante: " . $cincoDias . "<br><br>";


$dezDias = strtotime("10 days");

echo "Representação do momento atual até 10 dias adiante: " . $dezDias . "<br><br>";


$dataAtualMais5 = date('d/m/y', $cincoDias);

echo "Data atual mais 5 dias: " . $dataAtualMais5 . "<br><br>";

// Meses

$doisMeses = strtotime("2 months");

echo "Representação do momento atual até 2 meses adiante: " . $doisMeses . "<br><br>";


$dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);

echo "Data atual mais 2 meses: " . $dataAtualMaisDoisMeses . "<br><br>";

// Ano

$dozeAnos = strtotime("12 years");

echo "Data atual mais 12 anos: " . date("d/m/Y", $dozeAnos) . "<br><br>";

echo "Data atual mais 20 anos: " . date("d/m/Y", strtotime("20 years")) . "<br><br>"; // direto no echo