<?php
include "connection.php";

$sql ='SELECT codigo,nome,preco,unidade FROM produtos';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        $name = ucfirst($lines['nome']);
        $unitofmeasurement=strtoupper($lines['unidade']);
        echo"<tr class='lines'><td class='line'>".$lines['codigo']."</td><td class='line'>".$name."</td><td class='line'>R$ ".$lines['preco']."</td><td class='line'>".$unitofmeasurement."</td></tr>";

    }
}
mysqli_close($connection)


?>