<?php

/*
INTERFACES

• As interfaces criam um modelo de definição de uma classe;

• Então toda classe que implementar uma interface, deverá implementar
também suas propriedades e métodos, obrigatoriamente;

• A palavra reservada é implements;

    Exemplo:
        class Humano implements Caracteristicas

*/

interface Caracteristicas {

    const NOME = "Fred, O Gato Laranja";

    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 2;

    public function falar() {

        echo "Saudações! Eu sou " . Caracteristicas::NOME . "! Tenho $this->idade anos!" . "<br>";

    }

}

$fred = new Humano();

$fred->falar();