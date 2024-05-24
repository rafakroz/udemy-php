<?php

/*
EXERCÍCIO 53

• Crie uma classe cachorro;

• Crie o método latir e andar;

• Execute o método em novas instâncias da classe.

*/

class Cachorro1 {

    function latir($raca){

        echo "O $raca Latiu! <br>";

    }

    function andar($distancia){

        echo "Andou $distancia metros. <br>";

    }

}

$bulldog = new Cachorro1;
$pitbull = new Cachorro1;

$bulldog -> latir("Bulldog");
$bulldog -> andar(50);

echo "<br><br>";

$pitbull -> latir("Pitbull");
$pitbull -> andar(150);