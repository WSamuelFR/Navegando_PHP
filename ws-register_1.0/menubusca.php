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
        .cadastro {
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
        input[type="submit"] {
            background-color: blue;
            color: yellow;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: darkblue;
        }
        select {
            background-color: blue;
            color: yellow;
        }
    </style>
</head>
<body>
<?php home() ?>
    <div class="cadastro">
        <form id="reserva" action="#" method="POST">
            <?php $reserva = isset($_POST['reserva']) ? $_POST['reserva'] : ''; ?>
            <?php if ($reserva == 0) { ?>
                <?php header('location: buscafisica.php') ?>
            <?php } elseif ($reserva == 1) { ?>
                <?php header('location: buscajuridica.php') ?>
            <?php } elseif ($reserva == 2) { ?>
                <?php header('location: buscareserva.php') ?>
            <?php } ?>
            <table border="5px">
                <thead>
                    <tr>
                        <th>BUSCA-REGISTROS</th>
                        <th><input type="submit" name="res" value="confirm"></th>
                    </tr>
                    <tr>
                        <td>
                            <select name="reserva">
                                <option value="0">PESSOA-FISICA</option>
                                <option value="1">PESSOA-JURIDICA</option>
                                <option value="2">RESERVAS</option>
                            </select>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</body>
</html>
