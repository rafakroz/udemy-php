<?php
    require_once("templates/header.php");
    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $user = new User();

    $userData = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);

    $fullName = $user->getFullName($userData);

    // Altera para uma imagem padrão, caso o usuário não defina uma
    if($userData->image == '') {
        $userData->image = 'user.png';
    }

?>

<div id="main-container" class="container-fluid edit-profile-page">
    <!-- Coluna da esquerda -->
    <div class="col-md-12">
        <form action="<?php $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="type" value="update">
            <div class="row">
                <div class="col-md-4">
                    <h1><?= $fullName ?></h1>
                    <p class="page-description">Altere seus dados no formulário abaixo:</p>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" value="<?= $userData->name ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu sobrenome" value="<?= $userData->lastname ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" readonly class="form-control disable" id="email" name="email" placeholder="Digite o seu E-mail" value="<?= $userData->email ?>">
                    </div>
                    <input type="submit" class="btn card-btn" value="Alterar">
                </div>
                <!-- Coluna da direita -->
                <div class="col-md-4">
                    <div id="profile-image-container" style="background-image: url('<?php $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>
                    <div class="form-group">
                        <label for="image">Foto:</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="bio">Sobre você:</label>
                        <textarea class="form-control" name="bio" id="bio" rows="5" placeholder="Faça um resumo sobre você..."><?= $userData->bio ?></textarea>
                    </div>
                </div>
            </div>
        </form>
        <!-- Section de alteração de senha -->
        <div class="row" id="change-password-container">
            <div class="col-md-4">
                <h2>Alterar a senha:</h2>
                <p class="page-description">Digite a nova senha e confirme, para alterar a senha:</p>
                <form action="<?php $BASE_URL ?>user_process.php" method="POST">
                    <input type="hidden" name="type" value="changepassword">
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua nova senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de senha:</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme a sua nova senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Alterar senha">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("templates/footer.php");
?>