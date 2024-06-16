<?php

    /*
    Exercício 22
    • Crie variáveis que recebam idades;
    • Cheque de as idades são maiores ou iguais a 18;
    • Se sim, imprimea uma mensagem que a pessoa é maior de idade.
    */

    $nome1 = "Andressa";
    $nome2 = "Nicoly";
    $idade1 = 34;
    $idade2 = 13;
    $MaiorIdade = 18;

    $msgPositiva = "É maior de idade!";
    $msgNegativa = "É menor de idade!";

    echo "Teste 1 (Andressa): <br>";
    if ($idade1 >= $MaiorIdade) {
        echo "$nome1 tem " . $idade1 . " anos! " . $msgPositiva . "<br><br>";
    }
    else {
        echo "$nome1 tem " . $idade1 . " anos! " . $msgNegativa . "<br><br>";
    }

    // ----------------------------------------------------------------------------
    
    echo "Teste 2 (Nicoly): <br>";
    if ($idade2 >= $MaiorIdade) {
        echo "$nome2 tem " . $idade2 . " anos! " . $msgPositiva . "<br><br>";
    }
    else {
        echo "$nome2 tem " . $idade2 . " anos! " . $msgNegativa . "<br><br>";
    }