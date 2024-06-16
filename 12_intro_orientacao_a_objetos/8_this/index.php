<?php

/*
CONHECENDO O $THIS

• o $this (tradução literal: este) se refere a instância atual do objeto;

• Podendo assim alterar um valor de uma propriedade do objeto com:

    $this -> propriedade = "x";

• Podemos invocar um método do objeto com this também.

*/

class Animal {

    public $nome;

    function escolherNome($nome) {

        $this->nome = $nome;

    }

    function latir() {

        return "Au au! <br>";

    }

    function latirForte() {

        return strtoupper($this->latir());

    }

}

$frida = new Animal;

echo "O nome do animal é: $frida->nome <br><br>"; // O nome não será impresso, pois não foi definido.

$frida->escolherNome("Frida"); // Nome definido. Será impresso normalmente

echo "O nome do animal é: $frida->nome <br><br>";

echo "A $frida->nome latiu: " . $frida->latir();

echo "A $frida->nome latiu forte: " . $frida->latirForte();