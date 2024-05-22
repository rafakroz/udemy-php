<?php

/*
HERANÇA

• A herança é o recurso da OOP que dá possibilidade d euma classe
herdar métodos e propriedades de outra;

• Palavra reservada: extends;

• Exemplo:
    class Programador extends Pessoa {

    }

*/

class Humano {

    public $idade = 30;

    public function falar() {

        echo "Olá mundo!"."<br>";

    }

    private function gritarOla() {

        echo strtoupper("Olá mundo!"."<br>");

    }

    public function getGritarOlar() {

        $this->gritarOla();

    }

    protected function gritarIrEmbora() {

        echo strtoupper("Quero ir embora!"."<br>");

    }

    public function getGritarIrEmbora() {

        $this->gritarIrEmbora();

    }

}

class Programador extends Humano {

    public function getGritarIrEmboraProgramador() { //Consegue acessar o método protected, pois herdou propriedades e métodos

        $this->gritarIrEmbora();

    }

}

$jon = new Humano();

echo $jon->falar();

$rafael = new Programador();

echo $rafael->idade . "<br>";

echo $rafael->falar();

echo $rafael->getGritarOlar();

echo $rafael->getGritarIrEmbora();


$ned = new Programador();

echo $ned->getGritarIrEmboraProgramador();