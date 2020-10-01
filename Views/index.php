<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/public/styles/index-page.css">
    <?php include_once "header.php"?>
    <title>Inicio</title>
</head>

<body>
   
    <div id="principal-page">
        <li class="menu-content">
            <button class="menu-button" nome= "menu-button" onclick="window.location.href=' '">
                <div class="menu">
                    <img src="/P.I/public/img/cliente.jpg" alt="Clientes">
                    <h1 class="menu-title">Clientes</h1>
                </div>
            </button>
            <button class="menu-button" nome= "menu-button" onclick="window.location.href=' '">
                <div class="menu">
                    <img src="/P.I/public/img/PEDIDO.png" alt="Produtos">
                    <h1 class="menu-title">Produtos</h1>
                </div>
            </button>
            
        </li>
        <li class="menu-content">
            <button class="menu-button" nome= "menu-button" onclick="window.location.href='cadastro-cliente.php'">
                <div class="menu">
                    <img src="/P.I/public/img/Cadastro-Cliente.png" alt="Cadastrar/Alterar-dados-de-cliente">
                    <h1 class="menu-title">Cadastrar/Alterar dados de cliente</h1>
                </div>
            </button>
            <button class="menu-button" nome= "menu-button-cadastrar" onclick="window.location.href=' login.html'">
                <div class="menu">
                        <img class="adjust"src="/P.I/public/img/Adicionar-produtos.png" alt="Cadastro-de-produto">
                    <h1 class="menu-title">Cadastrar Produtos</h1>      
                </div>
            </button>
        </li>
    </div>
    
</body>
</html>