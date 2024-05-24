<?php

/*
PREENCHIMENTO DE FORMULÁRIO

• Podemos preencher o formulário com dados que vieram da requisição;

• Isso acontece bastante em resultados de busca ou edições de registros;

• Podemos fazer uma checagem de se o dado foi enviado e recebido para a página,
e utilizar o echo para exibir no atributo value do input;

    Exemplo:

        <input type="text" value="< ?= echo $nome; ?>">
        <input type="text" value="< ?= $nome; ?>">
*/

    $usuario = [
        'nome' => 'Jon Snow',
        'idade' => 17,
        'profissao' => 'Patrulheiro'
    ];

    $nome = $usuario['nome'];

    $idade = $usuario['idade'];

    $profissao = $usuario['profissao'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">

        <div>
            Nome: <input type="text" name="nome" placeholder="Digite o seu nome" value = "<?= $nome ?>">
        </div>

        <div>
            Idade: <input type="text" name="idade" placeholder="Digite a sua idade" value="<?= $idade ?>">
        </div>

        <div>
            Profissão: <input type="text" name="profissao" placeholder="Digite a sua profissão" value="<?= $profissao ?>">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>
</html>