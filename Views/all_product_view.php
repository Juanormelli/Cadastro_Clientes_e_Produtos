<?php
include "connection.php";

$sql ='SELECT * FROM produtos';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        $name = ucfirst($lines['nome']);
        $unitofmeasurement=strtoupper($lines['unidade']);
        echo"<form class='table-form' action='updt_or_delete.php' method='post'>
        <tr class='lines'>
        <td class='line'><input class='input-table' type='hidden' name='codigo' value='".$lines['codigo']."' readonly>".$lines['codigo']."</td>
        <td class='line'><input class='input-table' type='hidden' name='nome-do-produto' value='".$name."' readonly>".$name."</td>
        <td class='line'><input class='input-table' type='hidden' name='preco' value='".$lines['preco']."' readonly>R$ ".$lines['preco']."</td>
        <td class='line'><input class='input-table' type='hidden' name='unidade-de-medida' value='".$unitofmeasurement."' readonly>".$unitofmeasurement."</td>
        <td class='line'><button type='submit' name='btnEditProduct' class='edit-button'>U</button></td>
        </tr>";
    }
}
mysqli_close($connection)


?>