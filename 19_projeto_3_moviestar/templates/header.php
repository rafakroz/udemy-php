<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $flashMessage = $message->getMessage();

    if (!empty($flashMessage['msg'])){
        // Limpar mensagem
        $message->clearMessage();
    }

    $userDao = new UserDAO($conn, $BASE_URL);

    // Vai permitir que usuário não logado acessem o site
    $userDao = $userDao->verifyToken(false);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviestar</title>
    <link rel="sort icon" href="<?php $BASE_URL ?>img/moviestar.ico">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awasone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class=" navbar navbar-expand-lg">
            <a href="<?php $BASE_URL ?>index.php" class="navbar-brand">
                <img src="<?php $BASE_URL ?>img/logo.svg" alt="Moviestar" id="logo">
                <span id="moviestar-title">Moviestar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-lable="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <?php if($userDao): ?>
                    <p>Tá logado</p>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="<?php $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <?php if(!empty($flashMessage['msg'])): ?>
        <div class="msg-container">
            <p class="msg <?= $flashMessage['type'] ?>"><?= $flashMessage['msg'] ?></p>
        </div>
    <?php endif; ?>
