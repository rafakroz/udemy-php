<?php

/*
EXERCÍCIO 57

• Crie uma classe Cachorro com propriedades;

• Inicie as propriedades via constructor;

• Crie um método para exibir cada uma das propriedades que você criou.[

*/

class Cachorro {

    public $nome;

    public $raca;

    public $cor;

    public function __construct($nome, $raca, $cor) {

        $this->nome = $nome;

        $this->raca = $raca;

        $this->cor = $cor;

    }

    public function exibirAnimal() {

        echo "O " . $this->nome . " é da raça " . $this->raca . " e é " . $this->cor . "." . "<br><br>" ;

    }

}

$thor = new Cachorro("Thor", "Poodle", "Branco"); // Preenchenco as propriedades

$thor->exibirAnimal(); // Exibindo as informações

// -------------------------------------------------

// É possível instanciar com variáveis.

$nome = "Hulk";

$raca = "Pitbull";

$cor = "Cinza";

$hulk = new Cachorro($nome, $raca, $cor);

$hulk->exibirAnimal();