<?php

/*
EXERCÍCIO 37

• Crie uma função chamada defineCorCarro;
• Onde há um parâmetro chamado cor, com valor default de vermelha;
• Retorne a cor do carro;
• Imprima o retorno tanto com parâmetro default, como também definindo a cor;

*/

function defineCorCarro ($cor = "vermelho") {

    return "A cor do carro é: $cor";

}

$carroVermelho = defineCorCarro();
echo $carroVermelho . "<br>";

$carroPreto = defineCorCarro("preto");
echo $carroPreto . "<br>";