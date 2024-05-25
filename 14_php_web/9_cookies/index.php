<?php

/*
COOKIES

• Os cookies são strings que contém informações;

• A função para adicionar um cookie é setcookie;

• A função deve ser chamada antes do corpo da página, pois envia dados
como header;

• O cookie leva dados como: nome, valor e data de expiração;

• Podemos acessar os cookies de volta com $_COOKIE.

*/

    setcookie("nome", "Rafael", time() + 3600);

    if (isset($_COOKIE['nome'])) {

        $nome = $_COOKIE['nome'];

    }

    print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

    <h1>Olá mundo!</h1>

    <?php if($nome != ""): ?>

        <p>Seja bem-vindo <?= $nome ?>!</p>

    <?php endif; ?>

</body>
</html>