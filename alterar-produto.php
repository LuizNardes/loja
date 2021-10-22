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
    
<form method="POST" action="php/salvarProduto.php?acao=A&id=<?php echo $_GET['id']; ?>">
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
        <input type="number" step=".01" min="0" id="iPreco" name="nPreco" value="<?php echo precoProduto($_GET['id']); ?>">
    </p>
    <p>
        <label for="iQtd">Quantidade</label>
        <input type="number" id="iQtd" name="nQtd" value="<?php echo qtdProduto($_GET['id']); ?>">
    </p>
    <p>
        <select name="nCategoria" id="iCategoria">
            <option value="<?php echo categoriaProduto($_GET['id'])?>"><?php echo descricaoCategoria(categoriaProduto($_GET['id']))?></option>
            <?php echo lista_categorias();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>



</body>
</html>