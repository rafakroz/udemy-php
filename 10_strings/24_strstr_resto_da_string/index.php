<?php

/*
RETORNANDO O RESTO DA STRING

• Com a função strstr podemos encontrar um texto em uma string;
• Se algo for encontrado, a função vai retornar o resto da string após o texto;
• Se não encontrar nada retorna false.

*/

$texto = "Testando o resto da string, para vermos se dará certo.";

$palavra1 = "resto";

$resto1 = strstr($texto, $palavra1);

echo "Resultado a partir da palavra (" . $palavra1 . "): " . $resto1 . "<br><br>"; 

$palavra2 = "Java";

if(strstr($texto, $palavra2) === false) {

    echo 'A palavra "' . $palavra2 . '" não foi localizada na string! <br><br>';

}