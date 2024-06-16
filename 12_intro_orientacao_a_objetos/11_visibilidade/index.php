<?php

/*
VISIBILIDADE

• Temos três tipo de visibilidade: public, protected e private;

• PUBLIC: A propriedade ou método pode ser acessada de qualquer forma;

• PROTECTED: A propriedade ou método pode ser acessada apenas pela classe de origem
ou as que recebem a mesma herança;

• PRIVATE: A propriedade ou método pode ser acessada apenas pela classe que foi criada.

*/

class Car {

    public $rodas = 4;

    //public $vidro = "Sem película";
    private $vidro = "Sem película";

    protected $portas = 4;

    // A propriedade privada, só pode ser acessada pelo método
    public function getVidro() {

        return $this->vidro;

    }

    public function getPortas() {

        return $this->portas;

    }

}

// Nova classe para utilizar a proporiedade rodas de outra classe

class Mecanico {

    public function alterarRodas($carro) {

        $carro->rodas = 6;

    }

    function colocarPelicula($carro, $pelicula) {

        $carro->vidro = $pelicula;

    }
}

$carro = new Car;

echo "(PUBLIC) O carro tem " . $carro->rodas . ". <br>";

//

$rafael = new Mecanico;

$rafael->alterarRodas($carro); //alterando o valor da classe Car

echo "(PUBLIC ALTERADO PELA CLASE MECANICO) O carro tem " . $carro->rodas . ". <br>";

//

//$rafael->colocarPelicula($carro, "G20");

// Alterando o valor normalmente com o propriedade public
// quando a propriedade foi alterada para private, deu Fatal error
//echo $carro->vidro . "<br>";

//$carro->peliculaDeFabrica("G10");

echo "(PRIVATE) " . $carro->getVidro() . "<br>";

echo "(PROTECTED) " . $carro->getPortas() ."<br>";