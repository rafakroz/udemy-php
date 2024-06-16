<?php

    include_once("models/Car.php");

// Implementando a interface criada em Car.php
class CarDAO implements CarDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    // Select para todos os itens do banco
    public function findAll() {

        // será retornado um array com todos os dados
        $cars = [];

        // Como se trata de select *, não precisa de prepare e bindParam / bindValues
        $stmt = $this->conn->query('SELECT * FROM cars');

        // Obter todos os dados da query
        $data = $stmt->fetchAll();

        // Foreach com os dados que vieram da query
        foreach ($data as $item) {

            // Criando o objeto para adicionar no array
            $car = new Car();

            $car->setId($item['id']);
            $car->setBrand($item['brand']);
            $car->setKm($item['km']);
            $car->setColor($item['color']);

            // Inserindo o objeto no array
            // Como está sem índice, será inserido no final
            $cars[] = $car;
        }
        // Retorna para a view
        return $cars;
    }

    // Inserção de novo item
    public function create(Car $car) {

        $stmt = $this->conn->prepare('INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)');

        $stmt->bindValue(':brand', $car->getBrand());
        $stmt->bindValue(':km', $car->getKm());
        $stmt->bindValue(':color', $car->getColor());

        $stmt->execute();
    }
}