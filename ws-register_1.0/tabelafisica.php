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
            background-color: blue;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            color: yellow;
        }
        td {
            color: yellow;
        }
        input[type="text"], input[type="submit"] {
            background-color: yellow;
            color: blue;
            border: none;
            padding: 10px 5px;
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
    <div class="cadfisi">
    <form action="cadastrofisica.php" method="post">
        <table border="10px">
            <thead>
                <tr>
                    <th>FISICA</th>
                    <td>
                        <p>NOME</p>
                        <input type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>SOBRE-NOME</p>
                        <input type="text" name="sobrenome">
                    </td>
                    <td>
                        <p>CPF</p>
                        <input type="text" name="cpf">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>RG</p>
                        <input type="text" name="rg">
                    </td>
                    <td>
                        <p>E-MAIL</p>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>TELEFONE</p>
                        <input type="text" name="telefone">
                    </td>
                    <td>
                        <p>PAÍS</p>
                        <input type="text" name="pais">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>NACIONALIDADE</p>
                        <input type="text" name="nacionalidade">
                    </td>
                </tr>
                <tr>
                    <th>ENDEREÇO</th>
                    <td>
                        <p>RUA</p>
                        <input type="text" name="rua">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>BAIRRO</p>
                        <input type="text" name="bairro">
                    </td>
                    <td>
                        <p>NUMERO</p>
                        <input type="text" name="numero">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>CEP</p>
                        <input type="text" name="cep">
                    </td>
                    <td><input type="submit" value="SAVE"></td>
                </tr>
            </thead>
        </table>
    </form>
        
    </div>
 </body>
 </html>
