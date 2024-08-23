<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        input[type=submit] {
            background-color: yellow;
            text-align: center;
            border-bottom: 10px solid #ddd;
            color: blue;
        }

    </style>
</head>
<body>
<div>
<form action="CadastroFisico.php" method="post">
<center>
<table border="3px">
    <tr>
        <th><h1>CADASTRO</h1></th>
    </tr>
    <tr>
     <td>
        <select name="tipocadastro">
            <option value="0">Selecione</option>
            <option value="1">Pessoa</option>
            <option value="2">Empresa</option>
        </select><br><br>
        <input type="submit" value="OK">    
     </td>
    </tr>
</table>
</center>
</form>
<?php $tipocadastro = isset($_POST['tipocadastro']) ? $_POST['tipocadastro'] : ''; ?>

<?php if ($tipocadastro == 1) { ?>
       <?php CadastroHospede() ?>
<?php } ?>
</div>
<?php function CadastroHospede() { ?>
    <form action="../Models/FisicoModel.php" method="post">
    <center>
    <div id="h1cadf">
        <h1>CADASTRO HOSPEDE</h1>
    </div>
    <div>
         <div id="tabelacadastrofisico">
         <table border="3px">
            <tr>
                <th colspan="2">Informações Pessoais</th>
                <th colspan="2">Informações de Endereço</th>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
                <td>Cep</td>
                <td><input type="text" name="cep"></td>
            </tr>
            <tr>
                <td>SobreNome:</td>
                <td><input type="text" name="sobrenome"></td>
                <td>Estado:</td>
                <td><input type="text" name="estado"></td>
            </tr>
            <tr>
                <td>Cpf:</td>
                <td><input type="text" name="cpf"></td>
                <td>Cidade:</td>
                <td><input type="text" name="cidade"></td>
            </tr>
            <tr>
                <td>Rg:</td>
                <td><input type="text" name="rg"></td>
                <td>Bairro:</td>
                <td><input type="text" name="bairro"></td>
            </tr>
            <tr>
                <td>Data Nascimento:</td>
                <td><input type="text" name="datanascimento"></td>
                <td>Rua:</td>
                <td><input type="text" name="rua"></td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td>
                    <select name="sgenero">
                     <option value="0">Masculino</option>
                     <option value="1">Feminino</option>
                     <option value="2">Outro</option>
                    </select>
                </td>
                <td>Numero do Lote:</td>
                <td><input type="text" name="numerolote"></td>
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
            </tr>
            <tr>
                <td>País Natal:</td>
                <td><input type="text" name="paisnatal"></td>
            </tr>
            <tr>
                <td>País Atual:</td>
                <td><input type="text" name="paisatual"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"></td>
            </tr>
        
        <input type="submit" value="Enviar"><br><br>
         </div>

    </div>
    </center>
    </form>
    <?php return(null) ?>
<?php } ?>    
</body>
</html>
<?php