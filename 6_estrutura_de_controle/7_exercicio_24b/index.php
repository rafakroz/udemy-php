<?php

    /*
    Exercício 24 b
    • Crie uma variável que recebe um peso;
    • Caso seja maior que 80, imprima a mensagem que está pesado demais;
    • Se não, imprima "Peso dentro do limite".
    */

    $peso = 76;
    $pesao = 100;
    $limite = 80;

    $msg1 = "Você está acima do peso!";
    $msg2 = "Seu peso está dentro do limite!";

    if ($peso > $limite) {
        echo "Seu peso é $peso" . "kg. " . $msg1 . "<br><br>";
    }else {
        echo "Seu peso é $peso" . "kg. " . $msg2 . "<br><br>";
    }

    if ($pesao > $limite) {
        echo "Seu peso é $pesao" . "kg. " . $msg1 . "<br><br>";
    }else {
        echo "Seu peso é $pesao" . "kg. " . $msg2 . "<br><br>";
    }