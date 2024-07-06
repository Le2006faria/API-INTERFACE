<?php
// src/controllers/PessoaController.php

include_once '../model/Database.php';
include_once '../model/Pessoa.php';

class PessoaController {
    private $db;
    private $pessoa;

    public function __construct() {
        $this->db = new Database();
        $this->pessoa = new Pessoa($this->db->conn);
    }

    public function insert() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];

            if ($this->pessoa->insert($name, $age, $sex, $email)) {
                header("Location: ../view/index.php?msg=success");
            } else {
                header("Location: ../view/form.php?msg=error");
            }
        }
    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];

            if ($this->pessoa->update($id, $name, $age, $sex, $email)) {
                header("Location: ../view/index.php?msg=updated");
            } else {
                header("Location: ../view/update.php?id=$id&msg=error");
            }
        } else {
            $id = $_GET['id'];
            $result = $this->pessoa->getById($id);
            return $result->fetch_assoc();
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->pessoa->delete($id)) {
                header("Location: ../view/index.php?msg=deleted");
            } else {
                header("Location: ../view/index.php?msg=error");
            }
        }
    }

    public function list() {
        return $this->pessoa->getAll();
    }
}

$action = isset($_GET['action']) ? $_GET['action'] : '';
$controller = new PessoaController();

switch ($action) {
    case 'insert':
        $controller->insert();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        break;
}
?>
