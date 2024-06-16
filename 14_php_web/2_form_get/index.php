<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<form action="processamento.php" method="GET">
    <div>
        <input type="text" name="nome" placeholder="Preencha seu nome">
    </div>
    <div>
        <input type="text" name="idade" placeholder="Preencha sua idade">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

</body>
</html>

<!-- TESTE DE FORMULÁRIOS COM GET

• Vamos precisar criar um formulário e definir o método como GET, e também
o arquivo ou rota que vamos acessar em action;

• No lado do servidor vamos acessar a variável $_GET que contém os
parâmetros enviados para o servidor;

• Faremos o processamento e retonamos algo para o usuário; -->