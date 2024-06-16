<?php

    if (isset($_GET['nome'])) {  //isset : se o campo está preenchido

        $nome = $_GET['nome']; // dados preenchidos do formulário
        $idade = $_GET['idade']; // dados preenchidos do formulário

    } else {

        $nome = "Padrão"; // vai imprimir esta informação e não dará erro
        $idade = "Padrão";

    }

?>

<h2>O seu nome é <?= $nome ?> e você tem <?= $idade ?> anos!</h2>  <!-- Acessando e exibindo o dado -->

<!-- Os dados serão exibidos, pois como estamos utilizando o método GET, há parâmetros na URL. -->