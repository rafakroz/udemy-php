<?php

/*
BUSCANDO EM ARRAYS

• A função in_array verifica se um item passado por parâmetro está no array;

• O retorno é true se encontrar o item e false se não encontrar;

• Vamos passar dois argumentos para a função:

    in_array ("item, $arr)

*/

$arr = ['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if (in_array("batata", $arr)) {

    echo "Há o item batata no array. <br>";

}else {

    echo "Não há o item batata no array. <br>";

}

echo "<br>Busca com variável (true):<br><br>";

$item1 = "banana";

if (in_array($item1, $arr)) {

    echo "Há o item $item1 no array. <br>";

}else {

    echo "Não há o item $item1 no array. <br>";

}

echo "<br>Busca com variável (false):<br><br>";

$item2 = "uva";

if (in_array($item2, $arr)) {

    echo "Há o item $item2 no array. <br>";

}else {

    echo "Não há o item $item2 no array. <br>";

}
