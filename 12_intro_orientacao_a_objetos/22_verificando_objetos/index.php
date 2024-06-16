<?php

/*
VERIFICANDO OBJETOS

• Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;

• is_object() : verifica se uma variável é um objeto;

• get_class() : verifica a classe de um objeto;

• method_exists() : verifica se um método existe em objeto;

*/

class Humano {

    public function falar () {

        echo "Olá!";

    }

}


$rafael = new Humano;

$teste = 10;

if(is_object($rafael)) {

    echo "'Rafael' é um obejto!" . "<br><br>";

}else {

    echo "'Rafael' não é um objeto!" . "<br><br>";

}

if(is_object($teste)) {

    echo "'Teste' é um obejto!" . "<br><br>";

}else {

    echo "'Teste' não é um objeto!" . "<br><br>";

}

// ----------------------------------------------------

echo get_class($rafael) . "<br><br>"; // verifica a ancestralidade, sem saber o nome da classe

if(method_exists($rafael, "falar")) { // verifica se o método existe

    echo "Método existe!" . "<br><br>";

} else {

    echo "Método não existe!" . "<br><br>";

}

if(method_exists($rafael, "xxx")) { // verifica se o método existe

    echo "Método existe!" . "<br><br>";

} else {

    echo "Método não existe!" . "<br><br>";

}