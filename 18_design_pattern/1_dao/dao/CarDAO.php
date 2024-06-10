<?php

    include_once("models/Car.php");

/**
 * Implementando a interface criada em Car.php
 */
class CarDAO implements CarDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {

    }

    public function create(Car $car) {

        $stmt = $this->conn->prepare('INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)');

        $stmt->bindValue(':brand', $car->getBrand());
        $stmt->bindValue(':km', $car->getKm());
        $stmt->bindValue(':color', $car->getColor());

        $stmt->execute();

    }

}