<?php

    /*
    Operador lógico AND
    O resultado será verdadeiro, apenas quando todos as comparações/condições, forem verdadeiras
    */

    if (5 > 10 && 10 > 5){ //false e true
        echo "Entrou no if 1! <br>";
    }
    else {
        echo "If 1 é falso! <br>";
    }

    if (50 > 10 && 10 > 5){ //true e true
        echo "Entrou no if 2! <br>";
    }
    else {
        echo "If 2 é falso! <br>";
    }

    if (50 > 10 && 10 >500){ //true e false
        echo "Entrou no if 3! <br>";
    }
    else {
        echo "If 3 é falso! <br>";
    }

    if (50 > 100 && 10 > 500){ //false e false
        echo "Entrou no if 4! <br>";
    }
    else {
        echo "If 4 é falso! <br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if ($a > $b && $c == $d){ //true e true
        echo "Entrou no if 5 <br>";
    }
    else {
        echo "If 5 é falso! <br>";
    }

    if ($b <= $a && $c >= $d){
        echo "Entrou no if 6! <br>";
    }
    else {
        echo "If 6 é falso! <br>";
    }

    if ($b === $a && $c > $d){
        echo "Entrou no if 7! <br>";
    }
    else {
        echo "If 7 é falso! <br>";
    }

    if (($b <= $a && $c >= $d) && $a > $b){
        echo "Entrou no if 8! <br>";
    }
    else {
        echo "If 8 é falso! <br>";
    }

    if ($b <= $a && $c >= $d && $c === $a){
        echo "Entrou no if 9! <br>";
    }
    else {
        echo "If 9 é falso! <br>";
    }