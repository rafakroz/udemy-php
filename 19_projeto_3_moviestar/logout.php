<?php

    require_once("templates/header.php");

    // Usuário logado?
    if($userDao) {

        // Caso não, destruir tpken
        $userDao->destroyToken();

    }