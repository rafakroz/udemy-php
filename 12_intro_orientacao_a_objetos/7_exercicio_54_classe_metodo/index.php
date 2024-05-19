<?php

/*
EXERCÍCIO 54

• Crie uma classe Pessoa;

• Crie a propriedade nome e idade;

• E também um método andar;

*/

class Pessoa {

    public $nome;

    public $idade;

    function andar($distancia){

        echo "Foi percorrida a distância de $distancia metros. <br>";

    }

}

$rafael = new Pessoa;

$rafael -> nome = "Rafael";

$rafael -> idade = 40;

$metros = 1700;

echo "O nome do competidor: " . $rafael -> nome . ".<br>";

echo "Idade: " . $rafael -> idade . ".<br>";

$rafael->andar($metros);

//------------------------------------------------------------

echo "<br><br>";

$fred = new Pessoa;

$fred -> nome = "Fred";

$fred -> idade = 2;

$metros = 100;

echo "O nome do competidor: " . $fred -> nome . ".<br>";

echo "Idade: " . $fred -> idade . ".<br>";

$fred->andar($metros);
