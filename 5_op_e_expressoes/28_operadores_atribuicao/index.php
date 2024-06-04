<?php

    // Operadores de Atribuição

    $a = 0;
    $b = 2;
    $c = 3;
    $d = 5;
    $e = 10;
    $f = 0;
    $g = 5;
    
    // += 
    $a += 10; //$a = $a + 10
    echo '$a' . " += 10: <br>";
    echo $a . "<br><br>";

    // -= 
    $f -= 5; //$f = $f - 5
    echo '$f' . " -= 5: <br>";
    echo $f . "<br><br>";
    
    // *= 
    $d *= 2; //$d = $d * 2
    echo '$d' . " *= 2: <br>";
    echo $d . "<br><br>";

    // /= 
    $g /= 2; //$g = $g / 2
    echo '$g' . " /= 2: <br>";
    echo $g . "<br><br>";

    // %= 
    $e %= 3; //$e = $e % 3
    echo '$e' . " %= 3: <br>";
    echo $e . "<br><br>";

    // Utilizando Variáveis -----------------------------------

    $h = 10;
    $i = 20;

    $h += $i;

    echo '$h' . " += " . '$i' . "<br>";
    echo $h . "<br><br>";