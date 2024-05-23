<?php

/*
VERIFICANDO CLASSES

• Em PHP temos alguns métodos que nos ajudam a entender as classes:

• class_exists() : verifica se uma classe existe;

• get_class_methods() : verifica os métodos de uma classe;

• get_classe_vars() : mapeamento das propriedades de uma classe.

*/

class Humano {

    public $idade;

    public $nome;

    public $profissao;

    public function falar(){

    }

    public function andar(){

    }

}

if(class_exists("Humano")) {

    echo "A classe Humano existe!" . "<br>";

} else {

    echo "A classe Humano não existe!" . "<br>";

}

if(class_exists("Cachorro")) {

    echo "A classe Cachorro existe!" . "<br>";

} else {

    echo "A classe Cachorro não existe!" . "<br>";

}


// ----------------------------------------------------------


print_r(get_class_vars("Humano")); // Array com as variáveis

print_r(get_class_methods("Humano")); // Array com os métodos
