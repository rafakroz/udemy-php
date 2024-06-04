<?php

/*
Exercício 16

- Insira o valor 5 em uma variável, e o valor 3 em outra;
- Teste os operadores de igualdade, diferença, idêntico e não idêntico.

*/

    $a = 5;
    $b = 3;

    echo "Igualdade: == <br>";

    if ($a == $b) {
        echo "A comparação da variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), é verdadeira!";
    }
    else{
        echo "A comparação da variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), é falsa!";
    }

    //------------------------------------------------------------------------

    echo "<br><br>";

    echo "Diferença: != <br>";

    if ($a != $b) {
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), são diferentes!";
    }
    else{
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), são iguais!";
    }

    //------------------------------------------------------------------------

    echo "<br><br>";

    echo "Idêntico: === <br>";

    if ($a === $b) {
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), são idênticas! Tem tipo e valores iguais.";
    }
    else{
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), não são idênticas! Tem tipo e/ou valores diferentes.";
    }

    //------------------------------------------------------------------------

    echo "<br><br>";

    echo "Não Idêntico: !== <br>";

    if ($a !== $b) {
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), não são idênticas! Tem tipo e/ou valores diferentes.";
    }
    else{
        echo "A variável " . '$a' . " (" . gettype($a) . ": $a) e a variável " . '$b' . " (" . gettype($b) . ": $b), são idênticas! Tem tipo e valores iguais.";
    }