<?php

    /*
    EXDERCÍCIO 27

    • Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    • Faça um loop while para exibir apenas os dados que são strings.
   */

   $arrDados = ["Rafael", 5, true, false, "Apple", 12.8, "Samsung", true, [], "Playstation", 33, 40, "Marvel"];

   $y = count($arrDados);
   $i = 0;

   while ($i < $y){

    if (is_string($arrDados[$i])){

        echo $arrDados[$i] . "<br>";

    }

    $i++;

   }