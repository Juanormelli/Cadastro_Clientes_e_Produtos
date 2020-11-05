<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/public/styles/form.css">
    
    <link rel="stylesheet" href="/P.I/public/styles/tables.css">

    <?php include "header.php" ?>
    <title>Clientes</title>
</head>

<body>
    <div class="page-landing">
        <div class="title-page">
            <h1 class="page-title"> Clientes cadastrados</h1>
        </div>

        <form action="" method="post">
            <div class="campos">
                <label for="">Nome da Empresa</label>
                <input class="input-block" type="text" name="rzsocial">
            </div>
            <div class="campos">
                <label for="">CNPJ</label>
                <input class="input-block" type="text" name="cnpj">
            </div>
            <div class="campos">
                <label for="">Telefone</label>
                <input class="input-block-tell" type="number" name="telefone">
            </div>
            <div class="campos">
                <label for="">Logradouro</label>
                <input class="input-block" type="text" name="endereco">
                <label for="">Numero</label>
                <input class="input-block-number" type="text" name="numero">


            </div>
            <div class="campos">
                <label for="">Complemento</label>
                <input class="input-block" type="text" name="complemento">
            </div>
            <div class="campos">
                <label for="">Cidade</label>
                <input class="input-block" type="text" name="cidade">
                <label for="">Estado</label>
                <select class="select-block" name="estado" id="">
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


            <button type="submit" class="filter-button" name='btnFiltrar'>Filtrar</button>
            <button type="submit" class="filter-button" name='btnAll'>Mostrar todos</button>

        </form>
        
        <table class="table-set-client">

            <tr class="table-header">
                <td class="name">Nome da Empresa</td>
                <td class="columns-cnpj">CNPJ</td>
                <td class="columns">Telefone</td>
                <td class="columns">Endereço</td>
                <td class="columns">N°</td>
                <td class="columns">Comp</td>
                <td class="columns-city">Cidade</td>
                <td class="columns">Estado</td>
                <td class="columns">Ações</td>



            </tr>
            
            
            
            <?php if(isset($_POST['btnFiltrar'])){
                include "filter_client.php";
            }
            elseif (isset($_POST['btnAll'])){
                include "all_clients_filter.php";

            }
            else{
                include "all_clients_filter.php";

            }



            ?>
            
            </form>

        </table>

        </form>
    </div>
</body>

</html>