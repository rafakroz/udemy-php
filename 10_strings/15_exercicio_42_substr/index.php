<?php

/*
EXERCÍCIO 42

• Na frase "Cadê o meu queijo? Ele estava aqui em cima";
• Resgate apenas a palavra queijo.

*/

$texto = "Cadê o meu queijo? Ele estava aqui em cima";

$queijo = substr($texto, 12, 6);

$estava = substr($texto, 24, 6);

echo $queijo . "<br>";

echo $estava . "<br>";