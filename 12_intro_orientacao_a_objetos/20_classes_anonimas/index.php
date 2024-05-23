<?php

/*
CLASSES ANÔNIMAS

• As classes anônimas são criadas em uma variável e não possuem nome;

• Elas funcionam como qualquer outra classe;

• Precisamos fechar ela com ";"

    Exemplo:
        $anonima = new Class() {

        };


• Não permite heranças.

*/

$pessoa = new Class() {

    public $nome = "Rafael" . "<br>";

    public function dizerNome() {

        echo "Olá, meu nome é " . $this->nome . "<br>";

    }

}; // fechando com ;

echo $pessoa->nome;

$pessoa->dizerNome();