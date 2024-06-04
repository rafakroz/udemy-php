<?php

/*
EXERCÍCIO 29
• Crie um arrey com valores inteiros de 10 a 100, com incremento de 1;
• Aplique um loop array;
• Quando entrar os valores 30 ou 40, pule para a próxima execução.
*/

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while ($i < count($arr)){

        $numeroAtual = $arr[$i]; //facilitar a leitura e digitação no código

        if ($numeroAtual == 30 || $numeroAtual == 40) {

            $i++;

            continue; //Pular execução, quando os valores forem 30 ou 40
        }

        echo "Elemento: $numeroAtual <br>";

        $i++;
    }