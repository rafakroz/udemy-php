<?php

// Efetuar a conexão com o banco
include_once("db.php");

// Manipulação de dados
include_once("dao/CarDAO.php");

// Criando uma classe baseada no DAO
$carDao = new CarDao($conn);

// Inputs/Dados que virão do post
$brand = $_POST['brand'];
$km = $_POST['km'];
$color = $_POST['color'];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setkm($km);
$newCar->setColor($color);

$carDao->create($newCar);

header('Location: index.php');