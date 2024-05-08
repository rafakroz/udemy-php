<?php

/*
EXERCÍCIO 36

• Crie uma função que recebe um array de números;
• Crie um novo array com apenas os números que são maiores que 7;
• Retorne este novo array e imprima na tela.

*/

$arr = [];

for ($i = 0; $i <= 30; $i++) { //criando o array até 30

    array_push($arr, $i); 

}

// print_r($arr); //exibição do array

function arrayMaiorQueSete ($array) {

    $arrayRetorno = []; //o novo array criado

    for ($j = 0; $j < count($array); $j++) {

        if ($array[$j] > 7) {

            array_push($arrayRetorno, $array[$j]); //array a ser inserido e os números serem inseridos

        }

    }

    return $arrayRetorno; //retornar o resultado

}

$novoArray = arrayMaiorQueSete($arr); // invoncar a função no array original

print_r($novoArray);