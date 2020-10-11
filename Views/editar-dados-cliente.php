<?php
include "connection.php"; 
$nomeEditar=$_POST['nome-empresa'];
$cnpjEditar=$_POST['cnpj'];
$telefoneEditar=$_POST['telefone'];
$enderecoEditar=$_POST['endereco'];
$numeroEditar=$_POST['numero'];
$complementoEditar=$_POST['complemento'];
$cidadeEditar=$_POST['cidade'];
$estadoEditar=$_POST['estado'];

$sql="SELECT nome,cnpj,telefone,endereco,numero,complemento,cidade,estado FROM clientes 
WHERE cnpj='$cnpjEditar'"; 

$data = mysqli_query($connection,$sql) or die (mysqli_error($connection));

$total = mysqli_num_rows($data);
if($total>0){

    while($lines=mysqli_fetch_assoc($data)){
                
        echo "<html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='/P.I/public/styles/form.css'>
            
            
            <title>Editar dados de Cliente</title>
        </head>
        <body>
            <div class='page-landing'>
                <div class='title-page'>
                    <h1 class='page-title'>Editar dados de Cliente</h1>
                </div>
        
                <form action='cadastrar-clientes.php' method='post'>
                    <div class='campos'>
                        <label for=''>Nome da Empresa</label>    
                        <input class='input-block' type='text' name='rzsocial' required='' value='$nomeEditar'>
                    </div>
                    <div class='campos'>
                        <label for=''>CNPJ</label>    
                        <input class='input-block' type='number' name='cnpj' required='' Value='$cnpjEditar'>
                    </div>
                    <div class='campos'>
                        <label for=''>Telefone</label>    
                        <input class='input-block' type='number' name='telefone' required='' value='$telefoneEditar'>
                    </div>
                    <div class='campos'>
                        <label for=''>Endereço</label>    
                        <input class='input-block' type='text' name='endereco' required='' value='$enderecoEditar'>
                        <label for=''>Numero</label>    
                        <input class='input-block-number' type='text' name='numero' required='' value='$numeroEditar'>
                                    
                                       
                    </div>
                    <div class='campos'>
                        <label for=''>Complemento</label>    
                        <input class='input-block' type='text' name='complemento' required='' value='$complementoEditar'>
                    </div>
                    <div class='campos'>
                        <label for=''>Cidade</label>    
                        <input class='input-block' type='text' name='cidade' required='' value='$cidadeEditar'>
                        <label for=''>Estado</label>
                        <select class='select-block' name='estado' id='' required='' selected='$estadoEditar'>
                            <option value=NULL>--</option>
                            <option value='AC'>AC</option>
                            <option value='AL'>AL</option>
                            <option value='AP'>AP</option>
                            <option value='AM'>AM</option>
                            <option value='BA'>BA</option>
                            <option value='CE'>CE</option>
                            <option value='DF'>DF</option>
                            <option value='ES'>ES</option>
                            <option value='GO'>GO</option>
                            <option value='MA'>MA</option>
                            <option value='MT'>MT</option>
                            <option value='MS'>MS</option>
                            <option value='MG'>MG</option>
                            <option value='PB'>PB</option>
                            <option value='PR'>PR</option>
                            <option value='PE'>PE</option>
                            <option value='PI'>PI</option>
                            <option value='RJ'>RJ</option>
                            <option value='RN'>RN</option>
                            <option value='RS'>RS</option>
                            <option value='RO'>RO</option>
                            <option value='RR'>RR</option>
                            <option value='SC'>SC</option>
                            <option value='SP'>SP</option>
                            <option value='SE'>SE</option>
                            <option value='TO'>TO</option>
                        </select>
                        
                    </div>
        
                    <button class='cadastro'type='submit' name='btnCadastrar'>Adicionar Cliente </button>
        
                </form>
                
            </div>
            
        </body>
        </html>";
        
    }
}
mysqli_close($connection)

?>