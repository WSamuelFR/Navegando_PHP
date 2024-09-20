<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Gráficos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group h3 {
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>

<body>
    <form action="graficos.php" method="post">
        <h1>Bem-vindo ao Gerador de Gráficos</h1>
        <div class="form-group">
            <h3>Escolha o eixo Y do banco para seu gráfico</h3>
            <select name="eixoy">
                <option value="0">year</option>
                <option value="1">runtime_minutes</option>
                <option value="2">average_rating</option>
            </select>
        </div>
        <div class="form-group">
            <h3>Escolha o eixo X do banco para seu gráfico</h3>
            <select name="eixox">
                <option value="0">title_type</option>
                <option value="1">primary_title</option>
                <option value="2">original_title</option>
                <option value="3">genres</option>
                <option value="4">simple_title</option>
            </select>
        </div>
        <div class="form-group">
            <h3>Escolha o modelo do seu gráfico</h3>
            <select name="tipo">
                <option value="0">bars</option>
                <option value="1">lines</option>
                <option value="2">linepoints</option>
                <option value="3">points</option>
                <option value="4">area</option>
                <option value="5">pie</option>
                <option value="6">stackedarea</option>
                <option value="7">stackedbars</option>
                <option value="8">thinbarline</option>
            </select>
        </div>
        <input type="submit" value="Criar">
    </form>
</body>

</html>
