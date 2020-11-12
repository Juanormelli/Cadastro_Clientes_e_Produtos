<?php
include "connection.php";

$codigo=$_POST['cdg-produto'];
$nomeProduto=$_POST['nome-do-produto'];
$preco=$_POST['preço'];
$unidade=$_POST['unidade'];

$sql="UPDATE produtos SET codigo='$codigo',
nome='$nomeProduto',
preco='$preco',
unidade='$unidade'";

if(mysqli_query($connection,$sql)){
    echo ("<SCRIPT LANGUAGE = 'JavaScript'>
    window.alert('Cadastro Atualizado com sucesso') 
    window.location.href='products.php';
    </SCRIPT>");
    }
    else{
       echo $sql.mysqli_error($connection);
    }
    
    mysqli_close($connection)
?>