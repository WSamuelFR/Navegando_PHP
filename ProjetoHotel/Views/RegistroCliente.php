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
            border-color: blue;
        }
        table.t2{
            border-collapse: collapse;
            width: 50%;
            border-color: blue;
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
        button{
            background-color: blue;
            color: yellow;
        }

    </style>
</head>
<body>
<div>
<form action="RegistroCliente.php" method="post">
<center>
<table border="3px" class="t1">
    <tr>
        <th><h1>REGISTRO CLIENTE</h1></th>
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
       <?php RegistroHospede() ?>
<?php }  elseif ($tipocadastro == 2) { ?>
    <?php RegistroEmpresa() ?>
<?php } ?>
</div>
<div>
<?php function RegistroHospede() { ?>
    <center>
        <?php include('../Models/Conexao.php') ?>
        <?php $selecthosp = "SELECT nome, sobrenome, cpf, rg FROM hospede"; ?>
        <?php $queryhosp = mysqli_query($conexao, $selecthosp) ?>
        <form action="../Models/RegiHospede.php" method="post">
        <table border="3px">
            <thead>
                <tr>
                <td>Nome</td>
                <td>SobreNome</td>
                <td>Cpf</td>
                <td>Rg</td>
                <th>================</th>
                </tr>
            </thead>
                <?php while ($dadohosp = mysqli_fetch_row($queryhosp)) { ?>
                    <tbody>
                    <tr>
                        <td><?php echo $dadohosp[0]?></td>
                        <td><?php echo $dadohosp[1]?></td>
                        <td><input type="text" name="bcpf" value=<?php echo $dadohosp[2] ?> readonly></td>
                        <td><?php echo $dadohosp[3]?></td>
                        <td>
                            <a href="../Models/RegiHospede.php">
                                <button>REGISTRO COMPLETO</button>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                <?php } ?>
        </table>

        </form>
</center>


 <?php return(null) ?>
<?php } ?>

</div>    

    
</body>
</html>