<?php
include('conexao.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$rg = isset($_POST['rg']) ? $_POST['rg'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$rua = isset($_POST['rua']) ? $_POST['rua'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
$pais = isset($_POST['pais']) ? $_POST['pais'] : '';
$nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o CPF já existe no banco de dados
    $selectcpf = "SELECT cpf FROM fisica WHERE cpf = '$cpf'";
    $querycpf = mysqli_query($conexao, $selectcpf);
    $dadocpf = mysqli_fetch_row($querycpf);

    if ($dadocpf == NULL) {
        // Insere os dados no banco de dados
        $insertfisica = "INSERT INTO fisica (nome, sobrenome, cpf, rg, email, telefone, rua, bairro, numero, cep, pais, nacionalidade) VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$email', '$telefone', '$rua', '$bairro', '$numero', '$cep', '$pais', '$nacionalidade')";
        $queryfisica = mysqli_query($conexao, $insertfisica);
        echo '<script>alert("Cadastro realizado");
            window.location="tabelafisica.php";
            </script>';
    } else {
        echo '<script>alert("Cadastro já existe");
            window.location="tabelafisica.php";
            </script>';
    }
}
?>
