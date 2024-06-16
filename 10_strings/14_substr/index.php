<?php

/*
FUNÇÃO SUBSTR

• Com a função substr, podemos resgatar apenas uma parte da string;

    substr(str, início, fim);

• str = é a string que vamos procurar algo;
• início = é o índice da palavra ou texto;
• fim = é o índice final da palavra ou texto;

*/

$str = "Está é a minha string";

$minha = substr($str, 10, 6);

echo "String original: " . $str . "<br>";

echo "String a partir do 10 caractere, com comprimento de 5: " . $minha . "<br>";

echo "<br>";

$str2 = "Testando esta string ABC";

$novaString = substr($str2, 8); // Omitir comprimento = vai até o fim

echo $novaString . "<br>";

$novaString2 = substr($str2, 8, -3); // Comprimento negativo = remove no fim

echo $novaString2 . "<br>";