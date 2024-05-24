<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form action="cadastro.php" method="POST">
        <div>
            Marca: <input type="text" name="marca" placeholder="Marca do carro">
        </div>

        <div>
            Preço: <input type="text" name="preco" placeholder="Preço do carro">
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar"> Teto Solar
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Película"> Película
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Blidagem"> Blindagem
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>
</html>

<!--

TESTE DE FORMULÁRIOS COM POST

• Vamos precisar criar um formulário e definir o método como POST, e também
o arquivo ou rota que vamos acessar em action;

• No lado do servidor vamos acessar a variável $_POST que contém os
parâmetros enviados para o servidor;

• Faremos o processamento e retornamos algo para o usuário.

-->