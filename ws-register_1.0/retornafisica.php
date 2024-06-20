<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS-REGISTER</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            background-color: yellow;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            color: blue;
        }
        td {
            color: blue;
        }
    </style>
</head>
<body>
<?php function buscabyfisica() { ?>
    <?php include('conexao.php') ?>
    <?php $bnome = isset($_POST['bnome']) ? $_POST['bnome'] : '' ?>
    <?php $selectfisica = "SELECT * FROM fisica WHERE nome = '$bnome'" ?>
    <?php $queryfisica = mysqli_query($conexao, $selectfisica) ?>
  <div class="busfisi">
  <table border="10px">
        <tbody>
            <?php while ($dadofisica = mysqli_fetch_row($queryfisica)) { ?>
                <tr>
                <td>NOME</td>
                <td><?php echo $dadofisica[0] ?></td>
                <td>SOBRE-NOME</td>
                <td><?php echo $dadofisica[1] ?></td>
                <td>CPF</td>
                <td><?php echo $dadofisica[2] ?></td>
                </tr>
                <tr>
                <td>RG</td>
                <td><?php echo $dadofisica[3] ?></td>
                <td>E-MAIL</td>
                <td><?php echo $dadofisica[4] ?></td>
                <td>TELEFONE</td>
                <td><?php echo $dadofisica[5] ?></td>
                </tr>
                <tr>
                <td>RUA</td>
                <td><?php echo $dadofisica[6] ?></td>
                <td>BAIRRO</td>
                <td><?php echo $dadofisica[7] ?></td>
                <td>NUMERO</td>
                <td><?php echo $dadofisica[8] ?></td>
                </tr>
                <tr>
                <td>CEP</td>
                <td><?php echo $dadofisica[9] ?></td>
                <td>PAÍS</td>
                <td><?php echo $dadofisica[10] ?></td>
                <td>NACIONALIDADE</td>
                <td><?php echo $dadofisica[11] ?></td>
            <?php } ?>
        </tbody>
    </table>

  </div>

    <?php return(null) ?>
<?php } ?>

</body>
</html>




