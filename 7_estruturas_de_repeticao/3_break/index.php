<?php

/*
SAINDO DO LOOP

• Podemos sair de um loop while antes do seu fim;
• Para isso é necessário adicionar a instrução break;
• Após interpretada, o loop será automaticamwente finalizado;
• Geralmente inserimos esta instrução em uma condição if.

*/

    $x = 0;

    while ($x < 10) {

        echo "O valor de X é $x <br>";

        if ($x == 5) {
            echo "Loop finalizado. <br><br>";
            break;
        }

        $x++;

    }

    echo "Saiu do loop! <br>";