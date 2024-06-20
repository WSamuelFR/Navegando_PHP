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
        .cadfisi {
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
        input[type="text"], input[type="number"], input[type="time"], input[type="date"], input[type="submit"] {
            background-color: blue;
            color: yellow;
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
 <form id="save" action="cadastroreserva.php" method="post">   
  <div class="cadfisi">
    <table border="5px">
            <tr>
                <td><h3>NOVA RESERVA</h3></td>
                <td>
                <p>NOME</p>
                <input type="text" name="named">
                </td>
            </tr>
            <tr>
                <td>
                <p>DIA</p>
                <input type="text" name="dia">
                </td>
                <td>
                <p>MES</p>
                <input type="text" name="mes">
                </td>
            </tr>
            <tr>
                <td>
                <p>DATE</p>
                <input type="date" name="ano">
                </td>
                <td>
                <p>HORA</p>
                <input type="time" name="hora">
                </td>
            </tr>
            <tr>
                <td>
                <p>QUARTO</p>
                <input type="number" name="apartamento">
                </td>
                <td>
                <p>PESSOAS</p>
                <input type="number" name="pessoas">
                </td>
            </tr>
            <tr>
                <td>
                <p>PREÇO</p>
                <input type="text" name="valor">
                </td>
                <td><input type="submit" name="rs" value="SALVAR"></td>
            </tr>

    </table>
   </div>
 </form> 
</body>
</html>

    