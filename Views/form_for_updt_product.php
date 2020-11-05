<?php

$sql ='UPDATE * FROM produtos';

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);




?>