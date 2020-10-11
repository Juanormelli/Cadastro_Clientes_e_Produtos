<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/public/styles/form.css">
    
    <?php include "header.php"?>
    <title>Cadastro de Clientes</title>
</head>
<body>
    <div class="page-landing">
        <div class="title-page">
            <h1 class="page-title">Cadastro de Clientes</h1>
        </div>

        <form action="cadastrar-clientes.php" method="post">
            <div class="campos">
                <label for="">Nome da Empresa</label>    
                <input class="input-block" type="text" name="rzsocial" required="">
            </div>
            <div class="campos">
                <label for="">CNPJ</label>    
                <input class="input-block" type="number" name="cnpj" required="">
            </div>
            <div class="campos">
                <label for="">Telefone</label>    
                <input class="input-block" type="number" name="telefone" required="">
            </div>
            <div class="campos">
                <label for="">Endereço</label>    
                <input class="input-block" type="text" name="endereco" required="">
                <label for="">Numero</label>    
                <input class="input-block-number" type="text" name="numero" required="">
                            
                               
            </div>
            <div class="campos">
                <label for="">Complemento</label>    
                <input class="input-block" type="text" name="complemento" required="">
            </div>
            <div class="campos">
                <label for="">Cidade</label>    
                <input class="input-block" type="text" name="cidade" required="">
                <label for="">Estado</label>
                <select class="select-block" name="estado" id="" required="">
                    <option value=NULL>--</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
                
            </div>

            <button class="cadastro"type="submit" name="btnCadastrar">Adicionar Cliente </button>

        </form>
        
    </div>
    
</body>
</html>