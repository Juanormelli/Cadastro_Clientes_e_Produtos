<?php 
include "connection.php";

$nomeEmpresa=$_POST['rzsocial'];
$cnpjEmpresa=$_POST['cnpj'];
$telefoneEmpresa=$_POST['telefone'];
$enderecoEmpresa=$_POST['endereco'];
$complementoEmpresa=$_POST['complemento'];
$numeroEmpresa=$_POST['numero'];
$cidadeEmpresa=$_POST['cidade'];
$estadoEmpresa=$_POST['estado'];

$sql="UPDATE clientes SET nome='$nomeEmpresa' 
, cnpj='$cnpjEmpresa'
, telefone='$telefoneEmpresa'
, endereco='$enderecoEmpresa'
, numero='$numeroEmpresa'
, complemento='$complementoEmpresa'
, cidade='$cidadeEmpresa'
, estado='$estadoEmpresa' ";


if(mysqli_query($connection,$sql)){
    echo ("<SCRIPT LANGUAGE = 'JavaScript'>
    window.alert('Cadastro Atualizado com sucesso') 
    window.location.href='clients.php';
    </SCRIPT>");
    }
    else{
       echo $sql.mysqli_error($connection);
    }
    
    mysqli_close($connection)
    

?>