<?php

    // Exercício 17

    $a = 15;
    $b = 5;
    $c = "João";
    $d = "teste";
    $e = 1;
    $f = 2;
    $g = 3;

    // 15 > 5 AND "João" === "João"

    if ($a > $b && $c === "João"){
        echo "Entrou no if 1! <br>";
    }

    // "teste" > 5 AND 1

    if ("teste" > 5 && 1){
        echo "Entrou no if 2! <br>";
    }

    // 2 == 3 AND 5 >=3

    if ($f == $g && $b >= $g){
        echo "Entrou no if 3! <br>";
    }