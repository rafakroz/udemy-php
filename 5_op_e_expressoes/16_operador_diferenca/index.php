<?php
    //Operador de diferença !=

    $a = 3;
    $b = 5;
    $c = 5;
    $d = "Teste";

    if ($b != $c) {
        echo "O valor inteiro $b é diferente do inteiro $c.";
        echo "<br><br>";
    }
    else {
        echo "O valor inteiro $b é igual ao inteiro $c.";
        echo "<br><br>";
    }
    
    if ($a != $b) {
        echo "O valor inteiro $a é diferente do inteiro $b.";
        echo "<br><br>";
    }
    else {
        echo "O valor inteiro $a é igual ao inteiro $b.";
        echo "<br><br>";
    }

    if ($a != $d) {
        echo "O valor inteiro $a é diferente da string $d.";
        echo "<br><br>";
    }
    else {
        echo "O valor inteiro $a é igual a string $d.";
        echo "<br><br>";
    }

