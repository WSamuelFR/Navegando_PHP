<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('central.php') ?>
    <?php include('retornafisica.php') ?>
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
        .tbx {
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
<form id="search" action="buscafisica.php" method="post">
 <?php include('conexao.php') ?>
 <?php $bnome = isset($_POST['bnome']) ? $_POST['bnome'] : '' ?>
 <?php $selectbnome = "SELECT nome FROM fisica" ?>
 <?php $querybnome = mysqli_query($conexao, $selectbnome) ?>


 <?php if ($bnome <> null) { ?>
    <?php buscabyfisica() ?>
 <?php } ?>
    

<div class="registros">
<table border="5px" class="tbx">
    <div class="tablex">
        <thead class="thx">
            <tr class="trx">
                <th>PESQUISAR FISICA</th>
                <th>DISPONIVEIS</th>
            </tr>
            <tr class="trx">
                <td><input type="text" name="bnome"></td>
                <td>
                    <select MULTIPLE>
                        <?php while ($dadobnome = mysqli_fetch_row($querybnome)) { ?>
                            <option><?php echo $dadobnome[0] ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td><input type="submit" name="cd" value="confirm"></td>
            </tr>
        </thead>
    </div>
    </table>
</form> 
</div>
</body>
</html>