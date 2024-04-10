<?php

    /*
    Exercício 15
    - Crie uma operação que retorne falso com igualdade;
    - Crie uma operação que retorne verdadeiro com igualdade.
    */

    $a = 10;
    $b = 10;
    $c = 20;

    if ($a == $c) {
        echo "A comparação entre " . $a . " e " . $c . " é verdadeira!";
    }
    else {
        echo "A comparação entre " . $a . " e " . $c . " é falsa!";
        echo "<br><br>";
    }

    if ($a == $b) {
        echo "A comparação entre " . $a . " e " . $b . " é verdadeira!";
    }
    else {
        echo "A comparação entre " . $a . " e " . $b . " é falsa!";
        echo "<br><br>";
    }