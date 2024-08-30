<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table{
            border-collapse: collapse;
            width: 90%;
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
    <center>
    <?php include('Conexao.php') ?>
    <?php $bcpf = isset($_POST['bcpf']) ? $_POST['bcpf'] : '' ?>
    <?php $selecthospede = "SELECT * FROM hospede WHERE cpf = '$bcpf'" ?>
    <?php $queryhospede = mysqli_query($conexao, $selecthospede) ?>
    <?php if ($bcpf <> null) { ?>
        <?php while ($dadohospede = mysqli_fetch_row($queryhospede)) { ?>
        <table border="3px" class="t2">
            <thead>
                <th>Informações Pessoais</th>
                <th>================</th>
                <th>REGISTRO HOSPEDE</th>
                <th>================</th>
                <tr>
                <td>Nome:</td>
                <td><?php echo $dadohospede[0] ?></td>
                <td>SobreNome:</td>
                <td><?php echo $dadohospede[1] ?></td>
            </tr>
            <tr>
                <td>Cpf:</td>
                <td><?php echo $dadohospede[2] ?></td>
                <td>Rg:</td>
                <td><?php echo $dadohospede[3] ?></td>
            </tr>
            <tr>
                <td>Data Nascimento:</td>
                <td><?php echo $dadohospede[4] ?></td>
                <td>Genero:</td>
                <td><?php echo $dadohospede[5] ?></td>
            </tr>
            <tr>
                <td>Etnia:</td>
                <td><?php echo $dadohospede[6] ?></td>
                <td>Telefone:</td>
                <td><?php echo $dadohospede[10] ?></td>
            </tr>
            <tr>
                <td>País Natal:</td>
                <td><?php echo $dadohospede[8] ?></td>
                <td>País Atual:</td>
                <td><?php echo $dadohospede[7] ?></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><?php echo $dadohospede[9] ?></td>
                <th>================</th>
                <th>================</th>
            </tr>
            </thead>
            <tbody>
            <th>Informações De Endereço</th>
            <th>================</th>
            <th>REGISTRO HOSPEDE</th>
            <th>================</th>
            <tr>
                <td>Cep</td>
                <td><?php echo $dadohospede[11] ?></td>
                <td>Estado:</td>
                <td><?php echo $dadohospede[12] ?></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><?php echo $dadohospede[13] ?></td>
                <td>Bairro:</td>
                <td><?php echo $dadohospede[14] ?></td>
            </tr>
            <tr>
                <td>Rua:</td>
                <td><?php echo $dadohospede[15] ?></td>
                <td>Numero do Lote:</td>
                <td><?php echo $dadohospede[16] ?></td>
            </tr>
            </tbody>
    <?php }  ?>

    <?php } ?>
    
</div>

    </center>
</body>
</html>