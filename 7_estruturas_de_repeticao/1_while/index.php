<?php

// Repetição enquanto uma condição for falsa

    $x = 0; //Definição do contador

    while ($x < 10) { //Definição da estrutura

        echo $x . "<br>"; //Corpo do loop

        $x++; //Incremento do contador

    }
    
    //Teste 2 ------------------------------------------------------------
    echo "<br>Teste 2: Y = 0 <= 10, de 2 em 2 <br>";
    
    $y = 0;

    while ($y <= 10) {

        echo $y . "<br>";
        
        $y += 2; //Incremento de 2 em 2
        
    }
    
    //Teste 3 ------------------------------------------------------------
    echo "<br>Teste 3: Z = 10 > 0, reduzindo de 1 em 1 <br>";
    
    $z = 10;

    while ($z > 0) {

        echo $z . "<br>";
        
        $z--; //Decremento
        
    }
    
    //Teste 4 ------------------------------------------------------------
    echo "<br>Teste 4: A = 10 > 0, exibindo apenas os número impares, reduzindo de 1 em 1 <br>";
    
    $a = 10;

    while ($a > 0) {

        if ($a % 2 != 0){
            
            echo $a . "<br>";
            
        }
        
        $a--; //Decremento
        
    }