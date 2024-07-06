<?php
// src/views/update.php

include_once '../controller/PessoaController.php';
$pessoaController = new PessoaController();
$pessoa = $pessoaController->update();
?>

<?php include 'header.php'; ?>

<?php if (isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
    <p>Ocorreu um erro. Tente novamente.</p>
<?php endif; ?>

<h1>Atualizar Pessoa</h1>
<form method="post" action="../controller/PessoaController.php?action=update">
    <input type="hidden" name="id" value="<?php echo $pessoa['id']; ?>">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="<?php echo $pessoa['nome']; ?>" required><br><br>
    
    <label for="age">Idade:</label>
    <input type="number" id="age" name="age" value="<?php echo $pessoa['idade']; ?>" required><br><br>
    
    <label for="sex">Sexo:</label>
    <input type="text" id="sex" name="sex" value="<?php echo $pessoa['sexo']; ?>" required><br><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $pessoa['email']; ?>" required><br><br>
    
    <input type="submit" name="update" value="Atualizar">
</form>

<?php include 'footer.php'; ?>
