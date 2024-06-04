<?php

/*
LOOP INFINITO
• O loop infinito é um erro que pode ser ocasionado quando uma estrtura
 de repetição NÃO tem uma condição de térimo que seja possível;
• Por exemplo: x > 10 e a variável de referência tem um decremento, não um incremento.
*/

for ($i = 0; $i < 10; $i--) {  //decremento vai causar o loop infinito

    echo "Teste <br>";

}