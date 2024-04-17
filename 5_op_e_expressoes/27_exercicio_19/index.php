<?php

    /*
    Exercício 19

    Converta os seguintes dados para int com o operador cast:

    "testando"
    12.9
    true
    [1,2,3]
    */

    $a = (int) "testando";
    echo "Convertendo 'testando' em int: <br>";
    echo $a . "<br><br>";

    $b = (int) 12.9;
    echo "Convertendo 12.9 em int: <br>";
    echo $b . "<br><br>";

    $c = (int) true;
    echo "Convertendo true em int: <br>";
    echo $c . "<br><br>";

    $d = (int) [1,2,3];
    echo "Convertendo [1,2,3] em int: <br>";
    echo $d . "<br><br>";