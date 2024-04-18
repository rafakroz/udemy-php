<?php

    /*
    Exercício 21
    
    Faça as seguintes verificações em estruturas if:
    
    • 5 > 2;
    • Matheus != Pedro;
    • 12 é <= 11;

    Você deve inserir os valores em variáveis.
    */

    $a = 5;
    $b = 2;
    $c = "Matheus";
    $d = "Pedro";
    $e = 12;
    $f = 11;

    echo '$a (' . $a . ") > " . '$b (' . $b . ") <br>";
    if ($a > $b){
        echo "If 1 true! <br><br>";
    }
    else {
        echo "If 1 false! <br><br>";
    }

    echo '$c (' . $c . ") != " . '$d (' . $d . ") <br>";
    if ($c != $d){
        echo "If 1 true! <br><br>";
    }
    else {
        echo "If 1 false! <br><br>";
    }

    echo '$e (' . $e . ") <= " . '$f (' . $f . ") <br>";
    if ($e <= $f){
        echo "If 1 true! <br><br>";
    }
    else {
        echo "If 1 false! <br><br>";
    }