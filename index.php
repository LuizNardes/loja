<?php
    include('php/functionCategoria.php');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>A Lojinha</title>
</head>

<body>
    
<form method="POST" action="php/consulta.php">
    <p>
        <label for="iCadastro">ID</label>
        <input type="number" id="iCadastro" name="nCadastro">
    </p>
    <p>
        <label for="iDescricao">Descrição</label>
        <input type="text" id="iDescricao" name="nDescricao">
    </p>
    <p>
        <select name="nCategoria" id="iCategoria">
            <option value="0">Todas</option>
            <?php echo lista_categorias();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Consultar">
    </p>
</form>



</body>
</html>