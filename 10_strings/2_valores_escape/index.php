<?php

    /*
    VALORES DE ESCAPE
    Funções especiais em strings

    • \n = nova linha
    • \t = tab, espaço
    • \\ = barra invertida
    • \$ = sinal de dólar

    */

    header("Content-type: text/plain"); //função para o PHP entender o conteúdo como texto puro

    // pular linha \n
    echo "Texto numa linha \n Texto noutra linha \n\n";

    // tab \t
    echo "Testando o tab \t aqui \n\n";

    // barra invertida \\
    echo "Barra invertida \\ \n\n";

    // dólar/variável
    echo "Imprimindo o dólar \$teste \n\n";