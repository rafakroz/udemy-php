<?php

/*
EXERCÍCIO 33

• Crie uma função;
• Ela deve receber um parâmetro de nome idade;
• Imprima "Olá, eu sou NOME e tenho XX anos".
*/

function apresentacao ($gender, $name, $age) {

    if (is_string($name) && is_int($age)){ //aceitar apenas tipos de dados corretos

        echo "Olá, eu sou $gender $name e tenho $age anos! <br>";

    }else{

        echo "Preencha os parâmetros corretos! <br>";

    }

}

$genero1 = "o";
$nome1 = "Rafael";
$idade1 = 40;

$genero2 = "a";
$nome2 = "Andressa";
$idade2 = 33;

$nomeErrado = 13;



echo apresentacao($genero1, $nome1, $idade1);

echo apresentacao($genero2, $nomeErrado, $idade2);

echo apresentacao($genero2, $nome2, $idade2);