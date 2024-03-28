<?php

    $pessoa = [
        'nome' => 'Rafael',
        'idade' => 40,
        'profissão' => 'Supervisor de Vendas',
        'graduação' => 'Análise e Desenvolvimento de Sistemas'
    ];

    print_r($pessoa);
    echo "<br>";
    echo "<br>";

    // desafio

    $maiorIdade = 18;

    $pessoaDoArray = $pessoa['nome'];

    if ($pessoa['idade'] >= $maiorIdade) {
        echo "$pessoaDoArray é maior de idade!";
    }