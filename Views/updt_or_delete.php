<?php
    include "connection.php"; 
    

    if(isset($_POST['btnEdit'])){
        include "form_for_updt_client.php";
    }
    else{
        include "delete_client.php";
    }
        
    
    
?>