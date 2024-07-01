<?php
// src/views/delete.php

include_once '../controllers/PessoaController.php';
$pessoaController = new PessoaController();
$pessoaController->delete();
?>
