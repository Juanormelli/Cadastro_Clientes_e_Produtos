<?php
include "connection.php";

$codigo= $_POST['codigo'];

$sql ="SELECT * FROM produtos WHERE codigo='$codigo' ";

$data= mysqli_query($connection,$sql) or die (mysqli_error($connection));


$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
        echo "<html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='/P.I/public/styles/form.css'>
        
            
            <?php include 'header.php';?>
            <title>Cadastro de produtos</title>
        </head>
        <body>
            <div class='page-landing'>
                <div class='title-page'>
                    <h1 class='page-title'>Cadastro de produtos</h1>
                </div>
                
                <form action='update_product.php' method='post'>
                    <div class='campos'>
                        <label for=''>Codigo do produto</label>    
                        <input class='input-block' type='text' name='cdg-produto' value=".$lines['codigo']." required=''>
                    </div>
                    <div class='campos'>
                        <label for=''>Nome do Produto</label>    
                        <input class='input-block' type='text' name='nome-do-produto'  value=".$lines['nome']. " required=''>
                    </div>
                    <div class='campos'>
                        <label for=''>Preço</label>    
                        <input class='input-block-price' type='price' name='preço'  value=".$lines['preco']. " required=''>
                    </div>
                    <div class='campos'>
                        <label for=''>Unidade</label>    
                        <input class='input-block' type='text' name='unidade'  value=".$lines['unidade']. " required=''>
                    </div>
                    
                    <button class='cadastro'type='submit' name='btnAdcEditarProduto'>Adicionar Produto </button>
                    
        
                </form>
                
            </div>
            
        </body>
        </html>";
    
    
    }
}



?>