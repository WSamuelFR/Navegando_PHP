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
<?php function buscabyjuridica() { ?>
    <?php include('conexao.php') ?>
    <?php $bempresa = isset($_POST['bempresa']) ? $_POST['bempresa'] : '' ?>
    <?php $selectjuridica = "SELECT * FROM juridica WHERE empresa = '$bempresa'" ?>
    <?php $queryjuridica = mysqli_query($conexao, $selectjuridica) ?>
    <div class="busjuri">
    <table border="10px">
        <tbody>
               <?php while ($dadojuridica = mysqli_fetch_row($queryjuridica)) { ?>
                  <tr>
                  <td>EMPRESA</td>
                  <td><?php echo $dadojuridica[0] ?></td>
                  <td>CNPJ</td>
                  <td><?php echo $dadojuridica[1] ?></td>
                  <td>E-MAIL</td>
                  <td><?php echo $dadojuridica[2] ?></td>
                  </tr>
                  <tr>
                  <td>TELEFONE</td>
                  <td><?php echo $dadojuridica[3] ?></td>
                  <td>RUA</td>
                  <td><?php echo $dadojuridica[4] ?></td>
                  <td>BAIRRO</td>
                  <td><?php echo $dadojuridica[5] ?></td>
                  </tr>
                  <tr>
                  <td>NUMEOR</td>
                  <td><?php echo $dadojuridica[6] ?></td>
                  <td>CEP</td>
                  <td><?php echo $dadojuridica[7] ?></td>
                  <td>PAÍS</td>
                  <td><?php echo $dadojuridica[8] ?></td>
             <?php } ?>
        </tbody>
    </table>
    </div>

    <?php return(null) ?>

<?php } ?>
</body>
</html>