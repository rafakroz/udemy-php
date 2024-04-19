<?php

/*
    Exercício 23
    • Complmente o exercício 22:
    • Insira um else com uma mensagem para as pessoas que são menores de idade.
    */

    $nome1 = "Andressa";
    $nome2 = "Nicoly";
    $idade1 = 34;
    $idade2 = 13;
    $MaiorIdade = 18;

    $msgPositiva = "É maior de idade!";
    $msgNegativa = "É menor de idade!";

    echo "Teste 1 (Nicoly): <br>";
    if ($idade2 >= $MaiorIdade) {
        echo "$nome2 tem " . $idade2 . " anos! " . $msgPositiva . "<br><br>";
    }
    else {
        echo "$nome2 tem " . $idade2 . " anos! " . $msgNegativa . "<br><br>";
    }
