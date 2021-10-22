<?php

//Variáveis: dados trazidos da tela de consulta 
$cad = $_POST["nCadastro"];
$desc = $_POST["nDescricao"];
$cat= $_POST["nCategoria"];



        //Conexão ao BD
        include("conexao.php");
    
        if($cat == 0){
                $whereCAT = "";
        }else{
                $whereCAT = " AND idcategoria = ".$cat;
        }
        
        if($desc == ""){
                $whereDESC = "";
        }else{
                $whereDESC = " AND descricao LIKE '%".$desc."%' ";
        }
        
        if($cad == 0){
                $whereCAD = "";
        }else{
                $whereCAD = " AND idproduto = ".$cad;
        }
        

        //Montar meu comando SQL
        $sql = "SELECT * FROM produtos WHERE 1=1" 
        .$whereCAT
        .$whereCAD
        .$whereDESC;     
        
        

        $result = mysqli_query($conn, $sql); 
        mysqli_close($conn);    
        
        
        

         $lista = "<table border=1>"
         ."<tread><tr><th>ID</th><th>DESCRIÇÃO</th>"
         ."<th>CATEGORIA</th>"
         ."<th>PREÇO</th>"
         ."<th>QUANTIDADE</th>"
         ."<th>AÇÕES</th></tr><tread>";
        //Valida se retornou linha
        if(mysqli_num_rows($result) > 0){       
    
                //Array para receber os $result
                $array = array();
    
               
               
                //Descarregar dados no array
                 while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($array,$linha);
                }
                
                include('functionCategoria.php');

                
                //Validar dados 
                foreach($array as $campo){                    
                      

                $lista .= "<tr><td>".$campo['idproduto'] 
                . "</td> <td> " . $campo['descricao'] 
                . "</td><td>" . descricaoCategoria($campo['idcategoria']) 
                . "</td><td>" . $campo['preco'] 
                . "</td><td>" . $campo['quantidade'] 
                . "</td><td>"
                ."<a href='../alterar-produto.php?id=".$campo['idproduto']."' >Alterar</a> "
                ." / <a href='excluirProduto.php?id=".$campo['idproduto']."'>Excluir</a>" 
                ."</td></tr>";

                }
               $lista .= "</table>";
        }
    
        echo $lista; 
   



?>
<br>
<button><a href='../index.php'>Voltar</a></button>
<button><a href='../novo-produto.php'>Novo Produto</a></button>