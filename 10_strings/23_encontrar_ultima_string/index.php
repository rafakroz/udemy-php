<?php

/*
ENCONTRANDO A ÚLTIMA OCORRÊNCIA DE STRING

• Com a função strrpos (tem um R a mais) podemos encontrar a última ocorrência
de um texto na string;

• Se recebermos algum valor é que o texto foi encontrado, e este valor é
o índice inicial;

• Se for retornado false, o texto não está na string.

*/

$str = "Testando a busca pela palavra teste, em uma string com 2 palavras teste";

$palavra = strrpos($str, "teste"); //localizou o último teste

echo "Busca por teste com strrpos: " . $palavra . "<br>";

$palavra2 = strpos($str, "teste"); //localizou o primeiro teste

echo "Busca por teste com strpos: " . $palavra2 . "<br>";

//-----------------------------------------------------

$inexistente = "Java"; //buscando um termo inexistente

if (strrpos($str, $inexistente) === false) {

    echo 'A palavra "' . $inexistente . '" não foi encontrada! <br>';

}

$palavra3 = substr($str, strpos($str, "teste"), 5); //busca a palavra sem precisar contar caracteres manualmente

echo $palavra3;

/*
substr = resgatar uma palavra

    • str = é a string que vamos procurar algo;
    • início = é o índice da palavra ou texto;
    • fim = é o índice final da palavra ou texto;

$str = a variável onde está a raiz
strpos = localizar o índice de uma palavra
5 = qtd de caracteres

*/