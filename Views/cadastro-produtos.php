<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/public/styles/form.css">
    <?php include "header.php"?>
    <title>Document</title>
</head>
<body>
    <div class="page-landing">
        <div class="title-page">
            <h1 class="page-title">Cadastro de produtos</h1>
        </div>

        <form action="" method="post">
            <div class="campos">
                <label for="">Codigo do produto</label>    
                <input class="input-block" type="text" name="cdg-produto" required="">
            </div>
            <div class="campos">
                <label for="">Nome do Produto</label>    
                <input class="input-block" type="text" name="nome-do-produto" required="">
            </div>
            <div class="campos">
                <label for="">Preço</label>    
                <input class="input-block-price" type="price" name="preço" required="">
            </div>
            <div class="campos">
                <label for="">Unidade</label>    
                <input class="input-block" type="text" name="unidade" required="">
            </div>
            
            
           

            <button class="cadastro"type="submit" name="btnAdcProduto">Adicionar Produto </button>

        </form>

    </div>
    
</body>
</html>