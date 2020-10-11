<?php
    include "connection.php"; 
    $nomeExcluir=$_POST['nome-empresa'];
    $cnpjExcluir=$_POST['cnpj'];
    $telefoneExcluir=$_POST['telefone'];
    $enderecoExcluir=$_POST['endereco'];
    $numeroExcluir=$_POST['numero'];
    $complementoExcluir=$_POST['complemento'];
    $cidadeExcluir=$_POST['cidade'];
    $estadoExcluir=$_POST['estado'];

    if(isset($_POST['btnEdit'])){
        include "editar-dados-cliente.php";
    }
    else{
        
        $sql="DELETE FROM clientes WHERE cnpj=$cnpjExcluir ";

    if(mysqli_query($connection,$sql)){
        echo ("<SCRIPT LANGUAGE = 'JavaScript'>
        window.alert('Cliente deletado do banco de dados') 
        window.location.href='clientes.php';
        </SCRIPT>");
        }
        else{
           echo $sql.mysqli_error($connection);
        }
        mysqli_close($connection);
    }
        
?>