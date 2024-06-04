<?php

/*
CLASSES ABSTRATAS

• As classes abstratas não podem ser instanciadas;

• Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente
se uma classe herdar a abstrata;

• A palavra reservada tanto para classes como para métodos é abstract;

    Exemplo:
        abstract class ClasseAbstrata {

        }

*/

abstract class Teste {

    public static function testandoClasse() {

        echo "Este método é de uma classe abstrata." . "<br>";

    }

    abstract function testeAbstrato();

}

// $abc = new Teste;

Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbstrato() {

        echo "Teste do método abstrato" . "<br>";

    }

}

$n = new Nova;

$n->testeAbstrato();

