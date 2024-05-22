<?php

/*
EXERCÍCIO 55

• Crie uma classe Carro;

• Crie algumas propriedade e também a propiedade velocidade_maxima;

• Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;

• E também o getVelocidadeMaxima onde é possível imprimir a velocidade do carro.

*/

class Carro {

    public $marca;

    public $velocidadeMaxima;

    function setVelocidadeMaxima($velocidade){

        $this->velocidadeMaxima = $velocidade;

    }

    function getVelocidadeMaxima(){

        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h. <br>";

    }
}

$bmw = new Carro();

$bmw->marca = "BMW";

$bmw->setVelocidadeMaxima(200); // informando a velocidade máxima

$bmw->getVelocidadeMaxima(); // imprimindo o texto do método getVelocidadeMaxima


// ------------------------------------------------------------------------------------------------


/*

class Carro {

    public $marca;

    public $cor;

    public $velocidadeMaxima;

    function setVelocidadeMaxima($velocidade){

        $this->velocidadeMaxima = $velocidade;

    }

    function getVelocidadeMaxima(){

        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h. <br>";

    }
}

$bmw = new Carro();

$bmw->marca = "BMW";

$bmw->cor = "Azul";

$bmw->setVelocidadeMaxima(200); // informando a velocidade máxima

$bmw->getVelocidadeMaxima(); // imprimindo o texto do método getVelocidadeMaxima

*/


// ------------------------------------------------------------------------------------------------


/*

class Carro {

    public $marca;

    public $cor;

    public $velocidadeMaxima;

    public $marcaCarro;

    function setVelocidadeMaxima($velocidade){

        $this->velocidadeMaxima = $velocidade;

    }

    function setMarca($marca){

        $this->marcaCarro = $marca;
    }

    function getVelocidadeMaxima(){

        echo "A velocidade máxima da $this->marcaCarro é: $this->velocidadeMaxima km/h. <br>";

    }
}

$bmw = new Carro();

// $bmw->marca = "BMW";

// $bmw->cor = "Azul";

$bmw->setMarca("BMW");

$bmw->setVelocidadeMaxima(200); // informando a velocidade máxima

$bmw->getVelocidadeMaxima(); // imprimindo o texto do método getVelocidadeMaxima

*/