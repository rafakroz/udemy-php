<?php

/*
LOCALIZANDO STRING

• Com a função strpos podemos encontrar algum texto na string;
• Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
• Se for retornado false, o texto não está na string.

*/

$str = "Testando o método strpos. Este método é utilizado para localizar strings.";

$testeEncontrar1 = strpos($str, "strpos");

echo $testeEncontrar1 ."<br>";

// ---------------------------------------

$busca1 = "Java";

$testeEncontrar2 = strpos($str, $busca1);  // buscar string inexistente

echo $testeEncontrar2 . "<br>"; // não vai exibir nada

if ($testeEncontrar2 === false) {
    
    echo "A string (" . $busca1 . ") não foi localizada! <br>";
    
}

// ---------------------------------------

echo "<br>";

$busca2 = "to";

$testeEncontrar3 = strpos($str, $busca2);

echo $testeEncontrar3 . "<br>";

/*
Neste último caso, a busca não está definida como uma palavra completa,
no entanto, teremos o resultado assim mesmo.
*/