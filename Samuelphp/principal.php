<?php

session_start();

include('conexao.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<table border="1px">
		<tr>
		<?php
		if ($nivel < 3) { ?>
		<td><button><a href="addusuario.php">Adicionar Usuário</a></button></td> | 
		<?php }
			if ($nivel == 1) { ?>
			<td><button><a href="mudaracesso.php">Mudar Acesso</a></button></td>
		<?php } ?>
		</tr>
		<tr>
        <td><button><a href="alterardados.php">Alterar Dados</a></button></td>
		<br>
		<td><button><a href="logout.php">Sair</a></button></td>
		</tr>
		</table>
	</center>
</body>
</html>
