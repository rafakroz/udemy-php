<?php

/*

• As constantes são parecidas com variáveis, salvam valores em memória;

• Porém o seu valor não pode ser alterado;

• Exemplo de sintaxe:

    public const CHAVE_API = "ASO793mJJs39";

*/

class Humano {

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function constanteBracos() {

        echo "O indivíduo tem " . self::BRACOS ." braços. <br>"; //Com constante, se usa self e não $this

    }

    function constantePernas() {

        echo "O indivíduo tem ". self::PERNAS ." pernas. <br>";

    }

}

$rafael = new Humano;

echo "O indivíduo tem " . $rafael::OLHOS . " olhos. <br>";

$rafael->constanteBracos();

$rafael->constantePernas();