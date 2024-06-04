<?php

    /* Operador lógico OR ||
    Apenas uma comparação precisa ser verdadeira
    */

    if (5 > 2 || 3 < 4){ // true e true
        echo "A Operação 1 é verdadeira! <br>";
    }

    if (5 > 2 || 30 < 4){ // true e false
        echo "A Operação 2 é verdadeira! <br>";
    }

    if (5 > 20 || 3 < 4){ // true e false
        echo "A Operação 3 é verdadeira! <br>";
    }

    if (5 > 20 || 30 < 4){ // true e false
        echo "A Operação 4 é verdadeira! <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if  ($a > $b || $d > $c){
        echo "A operação 5 é verdadeira! <br>";
    }

    if  (($a > $b || $d > $c) && $c < $d){
        echo "A operação 6 é verdadeira! <br>";
    }

    if  (($a > $b && $d < $c) || $c < $d){
        echo "A operação 7 é verdadeira! <br>";
    }