<?php

    echo 5 / 2;
    echo "<br>";
    
    if (is_float(5/2)){
        echo "É float"; //o resultado gerado a partir de 2 inteiros é um float
        echo "<br>";
        echo "<br>";
    }
    
    echo 2 . 5; //O ponto concatena os números e geram uma string
    echo "<br>";
    
    if (is_string(2 . 5)){
        echo "É uma String <br>"; //Confirmando a string
        echo "<br>";
        echo "<br>";
    }

    $nome = "Rafael";
    $sobrenome = "Queiroz";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;