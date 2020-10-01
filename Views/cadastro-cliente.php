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

        <form action="" method="post">
            <div class="campos">
                <label for="">Nome da Empresa</label>    
                <input class="input-block" type="text" name="rzsocial" required="">
            </div>
            <div class="campos">
                <label for="">CNPJ</label>    
                <input class="input-block" type="text" name="cnpj" required="">
            </div>
            <div class="campos">
                <label for="">Telefone</label>    
                <input class="input-block" type="number" name="telefone" required="">
            </div>
            <div class="campos">
                <label for="">Logradouro</label>    
                <input class="input-block" type="text" name="logradouro" required="">
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
                    <option value="--">--</option>
                    <option value="acre">AC</option>
                    <option value="alagoas">AL</option>
                    <option value="amapa">AP</option>
                    <option value="amazonas">AM</option>
                    <option value="bahia">BA</option>
                    <option value="ceara">CE</option>
                    <option value="distrito-federal">DF</option>
                    <option value="espirito-santo">ES</option>
                    <option value="goias">GO</option>
                    <option value="maranhao">MA</option>
                    <option value="mato-grosso">MT</option>
                    <option value="mato-grosso-do-sul">MS</option>
                    <option value="minas-gerais">MG</option>
                    <option value="paraiba">PB</option>
                    <option value="parana">PR</option>
                    <option value="pernambuco">PE</option>
                    <option value="piaui">PI</option>
                    <option value="rio-de-janeiro">RJ</option>
                    <option value="rio-grande-do-norte">RN</option>
                    <option value="rio-grande-do-sul">RS</option>
                    <option value="rondonia">RO</option>
                    <option value="roraima">RR</option>
                    <option value="santa-catarina">SC</option>
                    <option value="sao-paulo">SP</option>
                    <option value="sergipe">SE</option>
                    <option value="tocantins">TO</option>
                </select>
                
            </div>

            <button class="cadastro"type="submit" name="btnCadastrar">Adicionar Cliente </button>

        </form>

    </div>
    
</body>
</html>