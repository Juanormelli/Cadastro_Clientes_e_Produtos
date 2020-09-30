<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/Models/index-page.css">
    <link rel="stylesheet" href="/P.I/Models/header.css">
    <?php include_once "header.php"?>
    <title>Inicio</title>
</head>

<body>
   
    <div id="principal-page">
        <li class="menu-content">
            <button class="menu-button" nome= "menu-button" onclick="window.location.href=' login.html'">
                <div class="menu">
                    <img src="/P.I/public/cliente.jpg" alt="Clientes">
                    <h1 class="menu-title">Clientes</h1>
                </div>
            </button>
            <button class="menu-button" nome= "menu-button" onclick="window.location.href=' login.html'">
                <div class="menu">
                    <img src="/P.I/public/PEDIDO.png" alt="Produtos">
                    <h1 class="menu-title">Produtos</h1>
                </div>
            </button>
            
        </li>
        <li class="menu-content">
            <button class="menu-button" nome= "menu-button" onclick="window.location.href=' login.html'">
                <div class="menu">
                    <img src="/P.I/public/Cadastro-Cliente.png" alt="Cadastrar/Alterar-dados-de-cliente">
                    <h1 class="menu-title">Cadastrar/Alterar dados de cliente</h1>
                </div>
            </button>
            <button class="menu-button" nome= "menu-button-cadastrar" onclick="window.location.href=' login.html'">
                <div class="menu">
                        <img class="adjust"src="/P.I/public/Adicionar-produtos.png" alt="Cadastro-de-produto">
                    <h1 class="menu-title">Cadastrar Produtos</h1>      
                </div>
            </button>
        </li>
    </div>
    
</body>
</html>