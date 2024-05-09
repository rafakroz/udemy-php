<?php

/*
ARGUMENTOS DAS FUNÇÕES

func_get_args > retorna uma lista com os argumentos de uma função;

func_num_args > retona o número de argumentos de uma função.

*/

function soma($a, $b, $c) {

    print_r(func_get_args());

    echo "<br>";
    echo "A quantidade de argumentos é: " . func_num_args() . "<br>";

    echo "O resultado é: ";
    return $a + $b + $c;
}

echo "Invocando a função: <br>";
soma(2, 4, 3);

echo "<br><br>";

echo "Imprimindo a função: <br>";
echo soma(2, 4, 3);