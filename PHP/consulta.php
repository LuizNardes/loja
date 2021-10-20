<?php

//Variáveis: dados trazidos da tela de consulta 
$cad = $_POST["nCadastro"];
$desc = $_POST["nDescricao"];
$cat= $_POST["nCategoria"];




//Chamda de Função: Consultar parâmetros no BD
$result = consulta($cadastro, $descricao, $categoria);

//Declaração de Função
function consulta($cadastro, $descricao, $categoria){

        //Conexão ao BD
        include("conexao.php"); 

        //Montar meu comando SQL
        $sql = "SELECT * FROM produtos " 
        ." WHERE id_produto = '".$cadastro."' "
        ." OR descricao  LIKE '%".$descricao."%' "
        ." AND id_categoria = '".$categoria."' ;" ;    
        
        $result_query = mysql_query( $sql );

        return $result_query;
}

     var_dump($result);
     die();

mysqli_close($conn);  
?>