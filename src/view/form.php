<?php
// src/views/form.php
?>

<h1>Inserir Pessoa</h1>
<form method="post" action="../controller/PessoaController.php?action=insert">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="age">Idade:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="sex">Sexo:</label>
    <input type="text" id="sex" name="sex" required><br><br>
    
    <label for="gender">Gênero:</label>
    <input type="text" id="gender" name="gender" required><br><br>
    
    <input type="submit" name="insert" value="Inserir">
</form>
