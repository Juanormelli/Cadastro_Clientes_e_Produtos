<?php
    include "connection.php"; 
    

    if(isset($_POST['btnEdit'])){
        include "form_for_updt_client.php";
    }
    elseif(isset($_POST['btnDelete'])){
        include "delete_client.php";
    }
    else{
        include "form_for_updt_product.php";

    }
    
    
?>