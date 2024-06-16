<?php

    require_once("templates/header.php");

    // Usuário logado?
    if($userDao) {

        $userDao->destroyToken();

    }