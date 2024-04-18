<?php

    // Estrutura if

    //Condição verdadeira
    if (5 > 2) {
        echo "Entrou no if (1)! <br><br>";
    }

    if (2 >=5) {
        echo "Não vai entrar no if! <br><br>";
    }

    if (10 === 10 && 9 > 3) {
        echo "Entrou no if (2)! <br><br>";
    }

    $a = 10;
    $b = 5;
    $c = "Entrou no if (3)! <br><br>";

    if ($a >= $b) {
        echo $c;
    }