<?php

/*
EXERCÍCIO 30 b

• Crie um array de 1 a 10;
• Utilize um loop FOR para criar este array;

Dica: utilizar o método array_push(arr, elemento) para inserir um elemento em um arry;

• Imprima o array criado com print_r.
*/


$arr = [];

for ($i = 1; $i <= 10; $i++){

    array_push($arr, $i); //é possível outros tipos de dados oriundos do banco

}

print_r($arr);