<?php
include "connection.php";

$sql ='SELECT nome,cnpj,telefone,endereco,numero,complemento,cidade,estado FROM clientes';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        $name = ucfirst($lines['nome']);
        $endereco=ucfirst($lines['endereco']);
        
        echo"<tr class='lines' >
        <td class='line'><input class='input-table' type='hidden' name='nome-empresa' value=". $name." readonly>".$name."</td>
        <td class='line'><input class='input-table' type='hidden' name='cnpj' value= $lines[cnpj] readonly>".$lines['cnpj']."</td>
        <td class='line'><input class='input-table' type='hidden' name='telefone' value=$lines[telefone] readonly>".$lines['telefone']."</td>
        <td class='line'><input class='input-table' type='hidden' name='endereco' value= '".$endereco."'readonly>".$endereco."</td>
        <td class='line'><input class='input-table' type='hidden' name='numero' value='".$lines['numero']."' readonly>".$lines['numero']."</td>
        <td class='line'><input class='input-table' type='hidden' name='complemento' value=$lines[complemento] readonly>".$lines['complemento']."</td>
        <td class='line'><input class='input-table' type='hidden' name='cidade' value='".$lines['cidade']."' readonly>".$lines['cidade']."</td>
        <td class='line'><input class='input-table' type='hidden' name='estado' value=$lines[estado] readonly>".$lines['estado']."</td>
        <td class='line'><button type='submit' class='filter-button'>Editar Cadastro</button></tr>";
        
    }
}
mysqli_close($connection)


?>