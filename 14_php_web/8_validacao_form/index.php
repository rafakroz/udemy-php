<?php

/*
VALIDAÇÃO DE FORMULÁRIOS

• A validação é uma parte importante do recebimento de dados;

• Devemos checar se os dados enviados condizem com o que estamos esperando;

• Para isso podemos criar condicionais fazendo as verificações;

• Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário;

• Obs.: É possível fazer validações com HTML e tmbém JavaScript;

*/
    $validacoes = [];

    if (count($_POST) > 0){

        if($_POST['nome'] == "") {

            $validacoes[] = "Por favor, preencha o nome do usuário!";

        }

        if($_POST['email'] == "") {

            $validacoes[] = "Por favor, preencha o E-mail do usuário!";

        }

        if($_POST['senha'] == "") {

            $validacoes[] = "Digite sua senha.";

        }

        if($_POST['senha'] != $_POST['confirmacao']) {

            $validacoes[] = "As senhas devem ser iguais!";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Form</title>
</head>
<body>

    <?php if(count($validacoes)) : ?>

        <ul>

            <?php foreach($validacoes as $validacao) : ?>

                <li><?php echo $validacao ?></li>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>

    <form action="index.php" method="POST">
        <div>
            Nome: <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>
        <div>
            E-mail: <input type="text" name="email" placeholder="Digite o seu E-mail">
        </div>
        <div>
            Senha: <input type="password" name="senha" placeholder="Digite a sua senha">
        </div>
        <div>
            Repita a Senha: <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>
</html>