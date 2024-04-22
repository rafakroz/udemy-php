<?php

    /*
    EXERCÍCIO 26    
    • Crie uma variável que recebe uma velocidade de um carro;
    • Depois crie uma estrutura if que verifica essa velocidade;
    • Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    • Se igual a 40, imprima uma mensagem para o motirsta tomar cuidado;
    • Se for maior que 40, imprima uma mensagem de multa.
    */

    $velMax = 40;

    $velCarroA = 35;
    $msgOk = "Você está na velocidade correta!";

    $velCarroB = 40;
    $msgAlerta = "Atenção! Você está no limite de velocidade!";

    $velCarroC = 50;
    $msgMulta = "Você foi multado! Excedeu o limite de velocidade!";

    //CARRO A -------------------------------------------------------------------

    if ($velCarroA < $velMax) {

        echo "Carro A, sua velocidade é $velCarroA" . "km/h. <br>";
        echo $msgOk . "<br><br>";
        
    }else if ($velCarroA == $velMax) {

        echo "Carro A, sua velocidade é $velCarroA" . "km/h. <br>";
        echo $msgAlerta . "<br><br>";
        
    }else {

        echo "Carro A, sua velocidade é $velCarroA" . "km/h. <br>";
        echo $msgMulta . "<br><br>";

    }

    //CARRO B -------------------------------------------------------------------

    if ($velCarroB < $velMax) {

        echo "Carro B, sua velocidade é $velCarroB" . "km/h. <br>";
        echo $msgOk . "<br><br>";
        
    }else if ($velCarroB == $velMax) {

        echo "Carro B, sua velocidade é $velCarroB" . "km/h. <br>";
        echo $msgAlerta . "<br><br>";
        
    }else {

        echo "Carro B, sua velocidade é $velCarroB" . "km/h. <br>";
        echo $msgMulta . "<br><br>";

    }

    //CARRO C -------------------------------------------------------------------

    if ($velCarroC < $velMax) {

        echo "Carro C, sua velocidade é $velCarroC" . "km/h. <br>";
        echo $msgOk . "<br><br>";
        
    }else if ($velCarroC == $velMax) {

        echo "Carro C, sua velocidade é $velCarroC" . "km/h. <br>";
        echo $msgAlerta . "<br><br>";
        
    }else {

        echo "Carro C, sua velocidade é $velCarroC" . "km/h. <br>";
        echo $msgMulta . "<br><br>";

    }