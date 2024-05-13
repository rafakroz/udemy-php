<?php

/*
REPETIÇÃO DE STRING

• Com a função str_repeat você pode repetir n vezes uma determinada string;
• O primeiro argumento é a string que será repetida;
• O segundo é o número de repetições.

*/

$str = "Teste";

$vezes3 = 3;

$stringRepetida = str_repeat($str, $vezes3);

echo $stringRepetida . "<br><br>";

$texto = "Testando repetição de frase. <br>";

$vezes5 = 5;

echo str_repeat($texto, $vezes5);