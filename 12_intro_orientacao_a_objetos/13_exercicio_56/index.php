<?php

/*
EXERCÍCIO 56

• Crie uma classe Humano com algumas propriedades e o método falar;

• Crie uma outra classe Professor que herda de humano.

• Crie as propriedades e métodos particulares desta classe;

• Exiba os valores das propriedades da classe pai e também utilize os métodos.

*/

class Humano {

    public $maos = 2;

    public $pernas = 2;

    public function falar($nome) {

        echo "Bom dia! Meu nome é $nome."."<br>";

    }

}

class Professor extends Humano {

    public $disciplina = "Matemática";

    public function aulaAtual($nome) {

        echo "O professor $nome, está dando aula de " . $this->disciplina . "<br>";

    }

}


$maria = new Humano();

echo "Maria tem " . $maria->maos . " mãos!" . "<br>";

//

$joao = new Professor();

echo "O professor João tem " . $joao->maos . " mãos." . "<br>";

echo "O professor João tem " . $joao->pernas . " pernas." . "<br>";

$joao->falar("Rafael");

$joao->aulaAtual("Rafael");