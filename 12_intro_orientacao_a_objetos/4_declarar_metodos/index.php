<?php

/*
DECLARANDO MÉTODOS

• Para declarar um método vamos utilizar a sintaxe de function, porém dentro de uma class;

• O restante é exatamente igual a sintaxe de função;

• Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios.

*/

class Pessoa {

    function falar(){

        echo "Olá, eu sou um objeto! <br>";

    }

    function somar($a, $b){

        echo $a + $b . "<br>";

    }
}

$rafael = new Pessoa;

$rafael->falar();

$rafael -> somar(10, 12);

//----------------------------------

$fred = new Pessoa;

$fred -> falar();

$fred -> somar(5, 7);