<?php
    include('functionCategoria.php');
    include('functionProduto.php');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>A Lojinha - Alterar Produto</title>
</head>

<body>
    
<form method="POST" action="php/salvarProduto.php?acao=A">
    <p>
        <label for="iCadastro">ID</label>
        <input type="number" id="iCadastro" name="nCadastro" readonly value="<?php echo $_GET['id']; ?>">
    </p>
    <p>
        <label for="iDescricao">Descrição</label>
        <input type="text" id="iDescricao" name="nDescricao" value="<?php echo descricaoProduto($_GET['id']); ?>">
    </p>
    <p>
        <label for="iPreco">Preço (R$)</label>
        <input type="number" step=".01" min="0" id="iPreco" name="nPreco">
    </p>
    <p>
        <label for="iQtd">Quantidade</label>
        <input type="number" id="iQtd" name="nQtd">
    </p>
    <p>
        <select name="nCategoria" id="iCategoria">
            <option value="0">Todas</option>
            <?php echo lista_categorias();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>



</body>
</html>