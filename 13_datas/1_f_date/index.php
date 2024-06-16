<?php

/*
FUNÇÃO DATE

• A função date recebe um parâmetro, que é o formato da data,
e este é o primeiro parâmetro da mesma;

• A resposta será a data atual;

    Exemplo:
        date("d/m/y");
*/

$d = date('d/m/y');

echo "Formato 1: " . $d . "<br><br>";


$e = date('D, M - Y'); // dia da semana "segunda, ..."

echo "Formato 2: " . $e . "<br><br>";


// $f = date('d, M - Y'); // dia da semana

// echo "Formato 2: " . $e . "<br><br>";

