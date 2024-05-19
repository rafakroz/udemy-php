<?php

/*
DECLARANDO PROPRIEDADES

• Para declarar propriedades vamos basicamente criar variável dentro de uma classe;

• Porém precismos definir a sua privacidade, como por exemplo public;

• Uma propriedade pública pode ser acessada fora do escopo do objeto;

    Exemplo:
        public $idade = 29;

*/


class Car {

    public $rodas; // variável sem valor definido na propriedade
    public $aro = 20;
    public $cor = "Vermelho";

    function ligar(){

        echo "Ligar motor! <br>";

    }

}

$ferrari = new Car;
// instanciando

$ferrari -> rodas = 4;
// definindo o valor da propriedade

echo "O carro tem aro " . $ferrari -> aro . ". <br><br>";

echo "O carro tem " . $ferrari -> rodas . " rodas. <br><br>";

$ferrari -> cor = "Preta";
// Alterando a cor da propriedade

echo "A da Ferrari é " . $ferrari -> cor . ". <br><br>";

$ferrari -> ligar();