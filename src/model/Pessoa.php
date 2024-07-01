<?php
// src/models/Pessoa.php

class Pessoa {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function insert($name, $age, $sex, $gender) {
        $sql = "INSERT INTO pessoas (nome, idade, sexo, genero) VALUES ('$name', '$age', '$sex', '$gender')";
        return $this->conn->query($sql);
    }

    public function getAll() {
        $sql = "SELECT * FROM pessoas";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM pessoas WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function update($id, $name, $age, $sex, $gender) {
        $sql = "UPDATE pessoas SET nome='$name', idade='$age', sexo='$sex', genero='$gender' WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM pessoas WHERE id='$id'";
        return $this->conn->query($sql);
    }
}
?>
