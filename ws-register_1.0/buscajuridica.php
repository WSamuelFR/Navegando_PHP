<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('central.php') ?>
    <?php include('retornajuridica.php') ?>
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
        input[type="text"], input[type="submit"], select {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 3px;
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
<form id="reserva" action="buscajuridica.php" method="POST">
            
           <?php include('conexao.php') ?>

           <?php $bempresa = isset($_POST['bempresa']) ? $_POST['bempresa'] : '' ?>
           <?php $selectbempresa = "SELECT empresa FROM juridica" ?>
           <?php $querybempresa = mysqli_query($conexao, $selectbempresa) ?>
            
           <?php if ($bempresa <> null) { ?>
           <?php buscabyjuridica() ?>
           <?php } ?>

            <table border="5px">
                <thead>
                    <tr>
                        <th>PESQUISAR JURIDICA</th>
                        <th>DISPONIVEIS</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="bempresa"></td>
                        <td>
                            <select multiple>
                                <?php while ($dadobempresa = mysqli_fetch_row($querybempresa)) { ?>
                                    <option><?php echo $dadobempresa[0] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="submit" name="cd" value="confirm"></td>
                    </tr>
                </thead>
            </table>
        </form> 
</div>
</body>
</html>