<?php
    include "connection.php"; 
    
    $cnpjExcluir=$_POST['cnpj'];
    

    
    
        
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
?>