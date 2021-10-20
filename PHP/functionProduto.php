<?php

    //Função para retornar a descrição do produto
    function DescricaoProduto($id) {
        //Conexão ao BD
    include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT descricao"
    ." FROM produtos"
    ." WHERE idproduto = ".$id.";" ;    

    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    

     $descricao = "";
    //Valida se retornou linha
    if(mysqli_num_rows($result) > 0){       

            //Array para receber os $result
            $array = array();

            //Descarregar dados no array
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($array,$linha);
            }

            //Validar dados 
            foreach($array as $campo){                    
                  $descricao = $campo['descricao'];
            }

        
    }

    return $descricao; 
}




?>