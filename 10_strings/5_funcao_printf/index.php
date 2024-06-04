<?php

//Função printf
//atualmente, pouco utilizado

$nome = "Fred";

// %s == string

printf("O nome é %s. <br>", $nome);

// %d == int

$n1 = 40;

printf("O número é %d e o outro é %d. <br>", $n1, 30);

// %f == float

printf("O valor da gasolina é R$ %f. <br>", 5.53);

// formtando as casas decimais
printf("O valor da gasolina é R$ %.3f. <br>", 5.53);
printf("O valor da gasolina é R$ %.2f. <br>", 5.53);
printf("O valor da gasolina é R$ %.1f. <br>", 5.53);