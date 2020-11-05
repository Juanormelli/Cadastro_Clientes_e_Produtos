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

    $sql="SELECT * FROM clientes 
    WHERE nome='$nomeEmpresa' or cnpj='$cnpjEmpresa'
    or telefone ='$telefoneEmpresa' or endereco='$enderecoEmpresa'
    or complemento='$complementoEmpresa' or numero='$numeroEmpresa'
    or cidade= '$cidadeEmpresa' or estado='$estadoEmpresa'";

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        $name = ucfirst($lines['nome']);
        $endereco=ucfirst($lines['endereco']);
        
        echo"<form class='table-form' action='updt_or_delete.php' method='post'><tr class='lines' >
        <td class='line'><input class='input-table' type='hidden' name='nome-empresa' value='".$name."' readonly>".$name."</td>
        <td class='line'><input class='input-table' type='hidden' name='cnpj' value= $lines[cnpj] readonly>".$lines['cnpj']."</td>
        <td class='line'><input class='input-table' type='hidden' name='telefone' value=$lines[telefone] readonly>".$lines['telefone']."</td>
        <td class='line'><input class='input-table' type='hidden' name='endereco' value= '".$endereco."'readonly>".$endereco."</td>
        <td class='line'><input class='input-table' type='hidden' name='numero' value='".$lines['numero']."' readonly>".$lines['numero']."</td>
        <td class='line'><input class='input-table' type='hidden' name='complemento' value='".$lines['complemento']."' readonly>".$lines['complemento']."</td>
        <td class='line'><input class='input-table' type='hidden' name='cidade' value='".$lines['cidade']."' readonly>".$lines['cidade']."</td>
        <td class='line'><input class='input-table' type='hidden' name='estado' value=$lines[estado] readonly>".$lines['estado']."</td>
        <td class='line'><button type='submit' name='btnEdit' class='edit-button'>U</button>
        <button type='submit' name='btnDelete' class='delete-button'>D</button></tr></form>";
        
        
    }
}
mysqli_close($connection)


?>