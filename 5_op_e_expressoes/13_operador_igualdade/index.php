<?php

    // Comparação de igualdade

    if (3 == 3){
        echo "Comparação verdadeira!";
    }
    
    if (3 ==4){
        echo "Comparação verdadeira!";
    }

    echo "<br><br>";

    // com variáveis
    
    $a = 12;
    $b = 12;
    $c = 100;
    
    if ($a == $b){
        echo "A comparação entre " . $a . " e " . $b . " é verdadeira!";
    }
    else {
        echo "A comparação entre " . $a . " e " . $b . " é falsa!";
    }
    
        echo "<br><br>";
    
    if ($a == $c){
        echo "A comparação entre " . $a . " e " . $c . " é verdadeira!";
    }
    else {
        echo "A comparação entre " . $a . " e " . $c . " é falsa!";
    }