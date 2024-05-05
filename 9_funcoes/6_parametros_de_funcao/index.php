<?php

/*
FUNÇÃO COM PARÂMETROS

• Podemos passar parâmetros para a função;
• Estes parâmetros são como variáveis, que são utilizados dentro da função para
  moldar a sua execução
• Não há número máximo de parâmetros;
  function teste (param, param2, ...){
    codigo
  }
*/

function velocidadeMaxima($vel){

    if (is_int($vel)){

        echo "O carro atinge a velocidade máxima de $vel" . " km/h. <br>";

    } else {

        echo "O dado > $vel < não é válido! Por favor, defina um número inteiro! <br>";
    
    }

}

echo "Funções com 1 parâmetro ------------------------ <br><br>";

velocidadeMaxima(200);
velocidadeMaxima(250);
velocidadeMaxima(300);

//Caso não seja definido um parâmetro, ocorrerá um fatal error
//velocidadeMaxima();

//é possível passar o valor do parâmetro por variável

$velocidade = 125;
$velocidade2 = 150;

velocidadeMaxima($velocidade);

//O PHP vai ignorar o parâmetro desnecessário, pois a função só aceita um
//velocidadeMaxima($velocidade2, "Teste");

//Passando um tipo de dado diferente
velocidadeMaxima("Teste");

echo "<br> Funções com 2 parâmetros ------------------------ <br><br>";

function descreverAnimal ($nome, $cor){

    echo "A cor de $nome é $cor. <br>";

}

$nome = "Willow";
$cor2 = "Marrom";

descreverAnimal("Fred", "Amarelo");
descreverAnimal("Nina", "Cinza");
descreverAnimal("Suzy", "Preto e Branco");

descreverAnimal($nome, $cor2);

//É preciso passar os parâmetros na ordem correta