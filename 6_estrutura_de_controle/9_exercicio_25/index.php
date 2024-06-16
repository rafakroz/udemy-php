<?php

/*
Exercício
• Crie variáveis com números e outra com string;
• Faça um if checando se é um número;
• Caso for, atribua a multiplicação por 2 em outra variável;
• E crie um outro if, que checa se o nome número é maior 100;
• Se sim, imprima uma mensagem. 
*/

    $a = 12;
    $b = 89;
    $c = "teste";

    if (is_int($a) || is_float($a)){

    $multi = $a * 2;

        if ($multi > 100) {

            echo "O número é maior que 100! <br><br>";
            
        }else {

            echo "O número não é maior que 100! <br><br>";

        }

    }else {

        echo "Não é um número! <br><br>";

    }

    if (is_int($b) || is_float($b)){

    $multi = $b * 2;

        if ($multi > 100) {

            echo "O número é maior que 100! <br><br>";
            
        }else {

            echo "O número não é maior que 100! <br><br>";

        }

    }else {

        echo "Não é um número! <br><br>";

    }

    if (is_int($c) || is_float($c)){

    $multi = $c * 2;

        if ($multi > 100) {

            echo "O número é maior que 100! <br><br>";
            
        }else {

            echo "O número não é maior que 100! <br><br>";

        }

    }else {

        echo "Não é um número! <br><br>";

    }