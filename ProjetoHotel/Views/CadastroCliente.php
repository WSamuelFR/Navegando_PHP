<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table.t1{
            border-collapse: collapse;
            height: 10%;
            width: 30%;
        }
        table.t2{
            border-collapse: collapse;
            width: 50%;
        }
        th {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            background-color: blue;
            color: yellow;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            background-color: yellow;
            color: blue;
        }
        input[type=submit] {
            background-color: yellow;
            text-align: center;
            border-bottom: 5px solid #ddd;
            border-color: blue;
            color: blue;
        }

    </style>
</head>
<body>
<div>
<form action="CadastroCliente.php" method="post">
<center>
<table border="3px" class="t1">
    <tr>
        <th><h1>CADASTRO CLIENTE</h1></th>
    </tr>
    <tr>
     <td>
        <select name="tipocadastro">
            <option value="0">Selecione</option>
            <option value="1">Hospede</option>
            <option value="2">Empresa</option>
        </select><br><br>
        <input type="submit" value="OK">    
     </td>
    </tr>
</table><br><br>
</center>
</form>
<?php $tipocadastro = isset($_POST['tipocadastro']) ? $_POST['tipocadastro'] : ''; ?>

<?php if ($tipocadastro == 1) { ?>
       <?php CadastroHospede() ?>
<?php }  elseif ($tipocadastro == 2) { ?>
    <?php CadastroEmpresa() ?>
<?php } ?>
</div>
<?php function CadastroHospede() { ?>
    <form action="../Models/CadHospede.php" method="post">
    <center>
    <div id="h1cadf">
    </div>
    <div>
         <div id="tabelacadastrofisico">
         <table border="3px" class="t2">
            <thead>
                <th>Informações Pessoais</th>
                <th>================</th>
                <th>CADASTRO HOSPEDE</th>
                <th>================</th>
                <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
                <td>SobreNome:</td>
                <td><input type="text" name="sobrenome"></td>
            </tr>
            <tr>
                <td>Cpf:</td>
                <td><input type="text" name="cpf"></td>
                <td>Rg:</td>
                <td><input type="text" name="rg"></td>
            </tr>
            <tr>
                <td>Data Nascimento:</td>
                <td><input type="text" name="datanascimento"></td>
                <td>Genero:</td>
                <td>
                    <select name="sgenero">
                     <option value="0">Masculino</option>
                     <option value="1">Feminino</option>
                     <option value="2">Outro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Etnia:</td>
                <td>
                    <select name="setnia">
                     <option value="0">Branco</option>
                     <option value="1">Negro</option>
                     <option value="2">Pardo</option>
                     <option value="3">Indigena</option>
                    </select>
                </td>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"></td>
            </tr>
            <tr>
                <td>País Natal:</td>
                <td><input type="text" name="paisnatal"></td>
                <td>País Atual:</td>
                <td><input type="text" name="paisatual"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
                <td>SALVAR:</td>
                <td><input type="submit" value="SALVAR"></td>
            </tr>
            </thead>
            <tbody>
            <th>Informações De Endereço</th>
            <th>================</th>
            <th>CADASTRO HOSPEDE</th>
            <th>================</th>
            <tr>
                <td>Cep</td>
                <td><input type="text" name="cep"></td>
                <td>Estado:</td>
                <td><input type="text" name="estado"></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input type="text" name="cidade"></td>
                <td>Bairro:</td>
                <td><input type="text" name="bairro"></td>
            </tr>
            <tr>
                <td>Rua:</td>
                <td><input type="text" name="rua"></td>
                <td>Numero do Lote:</td>
                <td><input type="text" name="numerolote"></td>
            </tr>
            </tbody>
         </div>

    </div>
    </center>
    </form>
    <?php return(null) ?>
<?php } ?>    
<?php function CadastroEmpresa() { ?>
    <form action="../Models/CadEmpresa.php" method="post">
    <center>
    <div id="h1cadf">
    </div>
    <div>
         <div id="tabelacadastrofisico">
         <table border="3px" class="t2">
            <thead>
                <th>Informações Comerciais</th>
                <th>================</th>
                <th>CADASTRO EMPRESA</th>
                <th>================</th>
                <tr>
                <td>Empresa:</td>
                <td><input type="text" name="empresa"></td>
                <td>Cnpj:</td>
                <td><input type="text" name="cnpj"></td>
            </tr>
            <tr>
                <td>Registro-EBT:</td>
                <td><input type="text" name="registroebt"></td>
                <td>Categoria:</td>
                <td><input type="text" name="categoria"></td>
            </tr>
            <tr>
                <td>País Cede:</td>
                <td><input type="text" name="paiscede"></td>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
                <td>SALVAR:</td>
                <td><input type="submit" value="SALVAR"></td>
            </tr>
            </thead>
            <tbody>
            <th>Informações De Endereço</th>
            <th>================</th>
            <th>CADASTRO EMPRESA</th>
            <th>================</th>
            <tr>
                <td>Cep</td>
                <td><input type="text" name="cep"></td>
                <td>Estado:</td>
                <td><input type="text" name="estado"></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input type="text" name="cidade"></td>
                <td>Bairro:</td>
                <td><input type="text" name="bairro"></td>
            </tr>
            <tr>
                <td>Rua:</td>
                <td><input type="text" name="rua"></td>
                <td>Numero do Lote:</td>
                <td><input type="text" name="numerolote"></td>
            </tr>
            </tbody>
         </div>

    </div>
    </center>
    </form>
    <?php return(null) ?>
<?php } ?>    
</body>
</html>
<?php