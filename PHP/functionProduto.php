<?php
//Função para retornar a descrição do produto ----------------------------------------------------------------------------- 
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



//Função para retornar id categoria do produto ---------------------------------------------------------------------------------------------------------    
function categoriaProduto($id) {
    
    //Conexão ao BD
    include("conexao.php");
    
    
    //Montar meu comando SQL
    $sql = "SELECT idcategoria "
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
                  $descricao = $campo['idcategoria'];
            }

    }

    return $descricao; 
}   


//Função para retornar preço do produto ---------------------------------------------------------------------------------------------------------    
function precoProduto($id) {
    
    //Conexão ao BD
    include("conexao.php");
    
    
    //Montar meu comando SQL
    $sql = "SELECT preco "
    ." FROM produtos"
    ." WHERE idproduto = ".$id.";" ;    
    
    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    
    
     $preco = "";
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
                  $preco = $campo['preco'];
            }

    }

    return $preco; 
}      



//Função para retornar quantidade do produto ---------------------------------------------------------------------------------------------------------    
function qtdProduto($id) {
    
    //Conexão ao BD
    include("conexao.php");
    
    
    //Montar meu comando SQL
    $sql = "SELECT quantidade "
    ." FROM produtos"
    ." WHERE idproduto = ".$id.";" ;    
    
    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    
    
     $qtd = "";
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
                  $qtd = $campo['quantidade'];
            }

    }

    return $qtd; 
}      
    
    
?>     