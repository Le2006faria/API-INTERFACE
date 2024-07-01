<?php
// src/views/delete.php

include_once '../controller/PessoaController.php';
$pessoaController = new PessoaController();
$pessoaController->delete();
?>
