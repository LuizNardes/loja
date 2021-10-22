<?php
    include('function.php');

//Variáveis: dados trazidos da tela como métodos POST e GET
$idGET = $_GET["id"];
$idPOST = $_POST["nCadastro"];
$descGET = descricaoProduto ($_GET["id"]);
$descPOST = $_POST

var_dump("P:".$idPOST." - G:".$descGET);
die();


// Receber os demais campos do form

// Fazer o SQL de update OU insert
if($acao =='A') {
    // SQL update
    $sql = ''; 
}else {
    // SQ insert
    $sql =';'
}

// Executar SQL
// Encerrar conexão


// Pra onde eu volto?
if($acao =='A'){
    //UPDADE
    header('location: ../alterar-produto.php');
}else{
    header('location: ../index.php');
}



?>