<?php
include "connection.php";

$sql ='SELECT codigo,nome,preco,unidade FROM produtos';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        $name = ucfirst($lines['nome']);
        $unitofmeasurement=strtoupper($lines['unidade']);
        echo"<form class='table-form' action='update_or_delete.php' method='post'>
        <tr class='lines'><td class='line'>".$lines['codigo']."</td><td class='line'>".$name."</td><td class='line'>R$ ".$lines['preco']."</td><td class='line'>".$unitofmeasurement."</td><td class='line'><button type='submit' name='btnEditProduct' class='edit-button'>U</button></tr>";
    }
}
mysqli_close($connection)


?>