<?php
include "connection.php";




$codigoProduto=$_POST["cdg-produto"];
$nomeProduto= $_POST["nome-do-produto"];
$precoProduto=$_POST["preço"];
$unidadeProduto=$_POST["unidade"];


$sql="INSERT INTO produtos (codigo,nome,preco,unidade)
VALUES ('$codigoProduto','$nomeProduto','$precoProduto','$unidadeProduto')";

if(mysqli_query($connection,$sql)){
echo ("<SCRIPT LANGUAGE = 'JavaScript'>
window.alert('Adicionado com Sucesso') 
window.location.href='cadastro-produtos.php';
</SCRIPT>");
}
else{
   echo $sql.mysqli_error($connection);
}

mysqli_close($connection)

?>