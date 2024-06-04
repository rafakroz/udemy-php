<?php

/*
CHECANDO ANCESTRALIDADE

• Para checar a ancestralidade de uma classe utilizamos o operador instanceof;

• Podemos inserir essa operação em um if, pois vai retornar um booleano;

    Exemplo:
        $objeto instanceof Humano

*/

class Humano {


}

class Animal {


}

class Professor extends Humano {


}

$rafael = new Humano();

$suzy = new Animal();

$mario = new Professor();

if ($rafael instanceof Humano){

    echo "Rafael é um humano!"."<br><br>";

}else{

    echo "Rafael não é um humano!"."<br><br>";

}

if ($rafael instanceof Professor) {

    echo "Rafael é um professor!"."<br><br>";

}else{

    echo "Rafael não é um Professor!"."<br><br>";

}

if ($rafael instanceof Animal){

    echo "Rafael é um animal!"."<br><br>";

}else{

    echo "Rafael não é um animal!"."<br><br>";

}

// -----------------------------------------------------

if ($suzy instanceof Humano){

    echo "Suzy é um humano!"."<br><br>";

}else{

    echo "Suzy não é um humano!"."<br><br>";

}

if ($suzy instanceof Professor) {

    echo "Suzy é um professor!"."<br><br>";

}else{

    echo "Suzy não é um Professor!"."<br><br>";

}

if ($suzy instanceof Animal){

    echo "Suzy é um animal!"."<br><br>";

}else{

    echo "Suzy não é um animal!"."<br><br>";

}

// -----------------------------------------------------

if ($mario instanceof Humano){

    echo "Mario Monteiro é um humano!"."<br><br>";

}else{

    echo "Mario Monteiro não é um humano!"."<br><br>";

}


if ($mario instanceof Professor) {

    echo "Mario Monteiro é um professor!"."<br><br>";

}else{

    echo "Mario Monteiro não é um Professor!"."<br><br>";

}

if ($mario instanceof Animal){

    echo "Mario Monteiro é um animal!"."<br><br>";

}else{

    echo "Mario Monteiro não é um animal!"."<br><br>";
}