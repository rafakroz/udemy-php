<?php

//Retorno de múltiplos dados

    function alteraDados ($nome, $idade) {

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados("Rafael", 40);

    print_r($dados);

    echo "<br><br>";

    echo "Olá $dados[0], você tem $dados[1] <br>";