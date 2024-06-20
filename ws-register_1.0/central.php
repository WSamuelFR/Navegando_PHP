<?php 

$central =  isset($_POST['central']) ? $_POST['central'] : ''; 
if ($central == 0) { 
        header('location: menucadastro.php');
    } elseif ($central == 1) { 
        header('location: menubusca.php');
    } elseif ($central == 2) { 
        header('location: menureserva.php');
} 

?>

<?php function home() { ?>

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
        .central {
            text-align: center;
            padding: 20px;
        }
        .bx{
            background-color: blue;
            color: yellow;
            font-size: 50px;
            border: none;
            padding: 30px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .top {
            color: blue;
        }
        label, select {
            color: blue;
        }
        select {
            background-color: yellow;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
    </head>
    <body>
    <div class="central">
            <a href="menucadastro.php" class="topp">
                <h1 class="top">
                    <button class="bx">WS-REGISTER</button>
                </h1>
            </a>
        <form id="register" action="central.php" method="POST">
            <label for="central">SELECT ACTION:</label>
            <select id="central" name="central">
                <option value="0">CADASTRO</option>
                <option value="1">BUSCA</option>
            </select>
            <input type="submit" value="CONFIRM">
        </form>
    </div>
    </body>
    </html>
   <?php return(null) ?>

<?php } ?>


