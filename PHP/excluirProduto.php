<?php



// echo "vai excluir o produto ".$_GET['id']>"?"

$id = $_GET['id'];

include('conexao.php');

$sql="DELETE FROM produtos WHERE idproduto = ".$id.";";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);


?>
