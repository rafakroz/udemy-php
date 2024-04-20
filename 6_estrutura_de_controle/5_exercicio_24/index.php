<?php

/*
Exercício 24
• Crie algumas variáveis com tipo de dados diferentes: string, int e boolen, por exemplo;
• Cheque se a variáveis é um inteiro;
• Caso sim, apresente uma mensagem confirmando o tipo de dado;
• Caso não, apresente outra mensagem.
*/

    $nome = "Rafael";
    $numero = 33;
    $x = true;

    $msgTrue = "A variável é um inteiro!";
    $msgFalse = "A variável não é um inteiro!";

    echo "Teste 1: " . '$nome (' . gettype($nome) . "): " . $nome . "<br>";
    if (is_int($nome)){
        echo $msgTrue . "<br><br>";
    }
    else {
        echo $msgFalse . "<br><br>";
    }

    echo "Teste 2: " . '$numero (' . gettype($numero) . "): " . $numero . "<br>";
    if (is_int($numero)){
        echo $msgTrue . "<br><br>";
    }
    else {
        echo $msgFalse . "<br><br>";
    }

    echo "Teste 3: " . '$x (' . gettype($x) . "): " . $x . "<br>";
    if (is_int($x)){
        echo $msgTrue . "<br><br>";
    }
    else {
        echo $msgFalse . "<br><br>";
    }