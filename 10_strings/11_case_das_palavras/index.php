<?php

/*
ALTERANDO O CASE DE PALAVRAS

• Podemos alterar o case apenas das palavras com funções PHP;
• ucfirst = primeira letra da string em caixa alta;
• ucwords = primera letra de cada palavra em caixa alta;

Não é muitoo utilizado.

*/

$texto1 = "testando o case das palavras. <br>";
$texto2 = "Testando o case das palavras. <br>";
$texto3 = "testando o case das palavras. <br>";

// Primeira letra em caixa alta

echo ucfirst($texto1);

echo ucfirst($texto2);

// Primeeira letra de cada palavra em caixa alta

echo ucwords($texto3);

echo ucwords($texto2);