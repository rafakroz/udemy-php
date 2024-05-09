<?php

/*
EXERCÍCIO 38

• Crie uma função que receba um de itens de mercado;

• Retorne este array em forma de string, separado em vírgulas;

*/

$lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

function listaParaString($arr) {

    $str = "Você levou estes itens, do mercado: ";

    for($i = 0; $i < count($arr); $i++){

        if($i + 1 == count($arr)){ //if para colocar ponto final

            $str .= "$arr[$i]. "; // .= concatenação com atribuição
            
        } else {
            
            $str .= "$arr[$i], "; // enquanto i+1 não for igual ao array, terá vírgula

        }

    }

    return $str;

}

echo listaParaString($lista);