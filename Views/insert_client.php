<?php 
    include "connection.php";

    $nomeEmpresa=$_POST['rzsocial'];
    $cnpjEmpresa=$_POST['cnpj'];
    $telefoneEmpresa=$_POST['telefone'];
    $endereçoEmpresa=$_POST['endereco'];
    $complementoEmpresa=$_POST['complemento'];
    $numeroEmpresa=$_POST['numero'];
    $cidadeEmpresa=$_POST['cidade'];
    $estadoEmpresa=$_POST['estado'];


    $sql="INSERT INTO clientes (nome,cnpj,telefone,endereco,numero,complemento,cidade,estado)
    VALUES('$nomeEmpresa','$cnpjEmpresa','$telefoneEmpresa','$endereçoEmpresa','$numeroEmpresa',
    '$complementoEmpresa','$cidadeEmpresa','$estadoEmpresa')";

    if(mysqli_query($connection,$sql)){
        echo ("<SCRIPT LANGUAGE = 'JavaScript'>
        window.alert('Cliente Adicionado com sucesso') 
        window.location.href='/P.I/Views/cadastro-cliente.php';
        </SCRIPT>");
        

    }
    else{
        
        
        echo $error=mysqli_error($connection);
    }


?>