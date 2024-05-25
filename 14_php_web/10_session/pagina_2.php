<?php

session_start(); // inicializando seção na página

print_r($_SESSION); // exibindo array para mostrar que mantém a mesma sessão

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Página 2</title>
</head>
<body>

    <h1>Página 2</h1>

    <div><a href="index.php">Index</a></div>
    <div><a href="pagina_1.php">Página 1</a></div>
    <div><a href="pagina_2.php">Página 1</a></div>

</body>
</html>