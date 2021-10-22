<?php
    include('php/function.php');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>A Lojinha - Alterar Produto</title>
</head>

<body>
    
<form method="POST" action="php/salvarProduto.php?acao=I">
    <p>
        <label for="iDescricao">Descrição</label>
        <input type="text" id="iDescricao" name="nDescricao" required>
    </p>
    <p>
        <label for="iPreco">Preço (R$)</label>
        <input type="number" step=".01" min="0" id="iPreco" name="nPreco" value="">
    </p>
    <p>
        <label for="iQtd">Quantidade</label>
        <input type="number" id="iQtd" name="nQtd" value="">
    </p>
    <p>
        <select name="nCategoria" id="iCategoria">
            <option value=">"></option>
            <?php echo lista_categorias();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Salvar">
    </p>
</form>



</body>
</html>