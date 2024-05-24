<?php

    $metodo = $_SERVER['REQUEST_METHOD'];

    if (isset($_POST['nome'])){ // se tiver dados no POST

        $nome = $_POST['nome'];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Autoprocessamento</title>
</head>
<body>

    <?php if ($metodo == 'GET') : ?>

        <form action="index.php" method = "POST">
            <div>
                <input type="text" name = "nome" placeholder="Digite o seu nome">
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>

    <?php else : ?>

        <h3>O seu nome é <?= $nome ?>.</h3> <!-- Caso o post tenha sido enviado -->

    <?php endif; ?>
</body>
</html>

<!--

AUTOPROCESSAMENTO DE PÁGINAS

• Podemos criar uma página que faz o processamento dos dados e também
exibe o input de informações;

• Para isso devemos criar um if que checa se o método de requisão
($SERVER['REQUEST_METHOD']) é GET ou POST;

• Depois criar as duas variações, para cada uma das possibilidades;

• Ou checar se algum parâmetro veio pela requisição e então criar as variações.

-->

