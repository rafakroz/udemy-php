<?php

    /*
    Operador ternário

    Uma forma resumida/simpleficada de efetuar uma espécie de if/else
    */

    echo "True: 20 > 10 <br>";
    echo 20 > 10 ? "Comparação verdadeira! <br><br>" : "Comparação falsa! <br><br>";

    echo "False: 20 > 50 <br>";
    echo 20 > 50 ? "Comparação verdadeira! <br><br>" : "Comparação falsa! <br><br>";

    $a = 10;
    $b = 5;

    echo "---------------------------- Utilizando variáveis ----------------------------<br><br>";

    echo '$a (' . $a . ") >= " . '$b (' . $b . ") <br>";
    echo $a >= $b ? "Comparação verdadeira! <br><br>" : "Comparação falsa! <br><br>";

    echo '$a (' . $a . ") === " . '$b (' . $b . ") <br>";
    echo $a === $b ? "Comparação verdadeira! <br><br>" : "Comparação falsa! <br><br>";

    echo '$a (' . $a . ") === " . '$b (' . $b . ") e 10 > 5<br>";
    echo $a === $b && 10 >5 ? "Comparação verdadeira! <br><br>" : "Comparação falsa! <br><br>";