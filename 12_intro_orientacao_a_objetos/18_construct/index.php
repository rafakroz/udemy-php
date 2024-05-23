<?php

/*
CONSTRUTORES

• Pelos contrautores podemos inicializar objetos com valores de
propriedades únicos para cada objeto;

• Passamos como argumentos os valores das propriedades;

    Exemplo:
        function __construct($portas, $motor, $teto_solar) {

        }

*/

class Car {

    public $marca;
    public $cor;

    public $portas;

    public function __construct($marca, $cor, $portas) {

        $this->marca = $marca;

        $this->cor = $cor;

        $this->portas = $portas;

    }

}

$bmw = new Car("BMW", "Preta", 4);

echo "A minha nova " . $bmw->marca . "é da cor " . $bmw->cor . "." . "<br><br>";

$ferrari = new Car("Ferrari", "Vermelha", 0);

echo "A minha nova " . $ferrari->marca . "é da cor " . $ferrari->cor . " e tem " . $ferrari->portas . " portas." . "<br><br>";
