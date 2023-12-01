<?php

session_start();

include('conexao.php');
include('funcoes.php');
include('validaradmingerente.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$selectcpf = "SELECT cpf FROM usuario WHERE cpf = '$cpf'";
$querycpf = mysqli_query($conexao, $selectcpf);
$dadocpf = mysqli_fetch_row($querycpf);

$selectlogin = "SELECT login FROM login WHERE login = '$login'";
$querylogin = mysqli_query($conexao, $selectlogin);
$dadologin = mysqli_fetch_row($querylogin);

if ($nome <> NULL) {
	if (($dadocpf == NULL) && ($dadologin == NULL)){
		$insertusuario = "INSERT INTO usuario (nome, cpf, telefone)
		VALUES 
		('$nome', '$cpf', '$telefone')";
		$queryusuario = mysqli_query($conexao, $insertusuario);

		$senhacriptografada = criptografar($senha);

		$insertlogin = "INSERT INTO login (cpf, login, senha, nivel) 
		VALUES
		('$cpf', '$login', '$senhacriptografada', 3)";
		$querylogin = mysqli_query($conexao, $insertlogin);
		echo '<script>alert("Usuário cadastdado com sucesso");
				window.location="addusuario.php";
				</script>';
	} else {
		echo '<script>alert("CPF e/ou Login já cadastdados");
				window.location="addusuario.php";
				</script>';
	}
}

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
		<h1>Adicionar Usuário</h1>
		<form id="form-addusuario" action="#" method="POST">
			<table border="1px">
			<tr>
			<td>Nome:<input type="text" name="nome" required></td>
			<td>CPF:<input type="text" name="cpf" required></td>
            </tr>
			<tr>
			<td>Telefone: <input type="text" name="telefone" required></td>
			<td>Login: <input type="text" name="login" required></td>
            </tr>
			<tr>
			<td>Senha: <input type="password" name="senha" required></td>
			<td><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
		</form>
	</center>
</body>
</html>
