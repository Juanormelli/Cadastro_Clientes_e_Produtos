<?php
include "connection.php";

$sql ='SELECT codigo,nome,preco,unidade FROM produtos';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        echo"<tr><td>".$lines['codigo']."</td><td>".$lines['nome']."</td><td>".$lines['preco']."</td><td>".$lines['unidade']."</td></tr>";

    }
}
mysqli_close($connection)


?>