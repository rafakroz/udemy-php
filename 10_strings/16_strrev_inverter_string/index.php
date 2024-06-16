<?php

/*
STRING REVERSA

• Com a função strrev, podemos com PHP inverter uma string;
• Ela recebe a string que será invertida como parâmetro.

*/

$nome = "Rafael";

$nomeInvertido = strrev($nome);

echo "$nome <br>";
echo "$nomeInvertido <br>";

echo "<br>";

$texto = "Breaking Bad é a melhor série que já assisti!";

$textoInvertido = strrev($texto);

echo $texto . "<br";

echo $textoInvertido . "<br>";