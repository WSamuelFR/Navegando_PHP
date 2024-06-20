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
<?php function buscabyreserva() { ?>
    <?php include('conexao.php') ?>
    <?php $breserva = isset($_POST['breserva']) ? $_POST['breserva'] : '' ?>
    <?php $selectbreserva = "SELECT * FROM reserva WHERE named = '$breserva'" ?>
    <?php $queribreserva = mysqli_query($conexao, $selectbreserva) ?>
  <div class="busjuri">
    <table border="10px">
                <tbody>
                    <?php while ($dadobreserva = mysqli_fetch_row($queribreserva)) { ?>
                        <tr>
                        <td>NOME</td>
                        <td><?php echo $dadobreserva[0] ?></td>
                        <td>DIA</td>
                        <td><?php echo $dadobreserva[1] ?></td>
                        </tr>
                        <tr>
                        <td>MES</td>
                        <td><?php echo $dadobreserva[2] ?></td>
                        <td>DATE</td>
                        <td><?php echo $dadobreserva[3] ?></td>
                        </tr>
                        <tr>
                        <td>HORA</td>
                        <td><?php echo $dadobreserva[4] ?></td>
                        <td>QUARTO</td>
                        <td><?php echo $dadobreserva[5] ?></td>
                        </tr>
                        <tr>
                        <td>PESSOAS</td>
                        <td><?php echo $dadobreserva[6] ?></td>
                        <td>PREÇO</td>
                        <td><?php echo $dadobreserva[7] ?></td>
                        </tr>  
       
                    <?php } ?>
                </tbody>
    </table>

  </div>

    <?php return(null) ?>
<?php } ?>

</body>
</html>