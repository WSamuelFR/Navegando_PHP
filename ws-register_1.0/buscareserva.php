<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('central.php') ?>
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
        .registros {
            text-align: center;
            padding: 20px;
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
        input[type="text"], input[type="submit"] {
            background-color: blue;
            color: yellow;
            border: none;
            padding: 10px 1px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
<?php home() ?>
<form id="search" action="buscareserva.php" method="post">
    <div>
     <?php include('retornareserva.php') ?>
     <?php include('conexao.php') ?>
     <?php $breserva = isset($_POST['breserva']) ? $_POST['breserva'] : '' ?>
     <?php $selectbreserva = "SELECT named FROM reserva" ?>
     <?php $querybreserva = mysqli_query($conexao, $selectbreserva) ?>

     <?php if ($breserva <> null) { ?>
            <?php buscabyreserva() ?>
     <?php } ?>
    </div>
    <div class="registros">
        <table border="5px">
            <thead>
                <tr>
                    <th>PESQUISAR RESERVAS</th>
                    <th>DISPONIVEIS</th>
                </tr>
                <tr>
                    <td><input type="text" name="breserva"></td>
                    <td>
                        <select MULTIPLE>
                            <?php while ($dadobreserva = mysqli_fetch_row($querybreserva)) { ?>
                                <option><?php echo $dadobreserva[0] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="bs" value="confirm"></td>
                </tr>
            </thead>
        </table>
    </div>
</form>
</body>
</html>
