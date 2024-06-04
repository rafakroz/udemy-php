<?php

    /*
    EXERCÍCIO 39

    •Crie uma função que recebe características de algum objeto como
    argumento (carro, sofá, cafeteira), em array associativo;

    • O array deve conter nome => preco;

    • Retorne apenas os itens que custam mais que R$ 10;

    • Imprima o retorno.

    */

    $arr = [ //array associativo
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8,
        'aerofólio' => 600,
        'roda aro 17' => 350
    ];

    function itensCaros($arr) {

        $arrItensCaros = []; //novo array

        foreach ($arr as $item => $preco) { //estrutura de repetição orienta a um array

            if ($preco > 10) {

                array_push($arrItensCaros, $item, $preco);

            }

        }

        return $arrItensCaros;

    }

    $novoArray = itensCaros($arr);

    print_r($novoArray);