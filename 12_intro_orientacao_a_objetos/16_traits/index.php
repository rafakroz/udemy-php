<?php

/*
TRAITS

• As traits permitem o reuso do código sem hieraquia de classes, ou seja, sem herança;

• Podemos assim utilizar os métodos da classe que foi feita a trait;

• Utilizamos a palavra reservada use;

    Exemplo:
        classe Teste {
            use Class Trait
        }

*/


trait Objeto {

    public function teste() {

        echo "Objeto da trait Objeto 1." . "<br>";

    }

}

trait Objeto2 {

    public $x = 10;

    public function teste2() {

        echo "Objeto da trait Objeto 2." . "<br>";

    }

}

class Central {

    use Objeto;
    use Objeto2;

}

$teste1 = new Central;

$teste1->teste();

$teste1->teste2();
