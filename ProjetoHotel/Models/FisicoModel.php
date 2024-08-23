<?php

include('conexao.php');
include('../Views/CadastroFisico.php');
 // hospede

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$rg = isset($_POST['rg']) ? $_POST['rg'] : '';
$datanascimento = isset($_POST['datanascimento']) ? $_POST['datanascimento'] : '';
$Sgenero = isset($_POST['sgenero']) ? $_POST['sgenero'] : '';
$Setnia = isset($_POST['setnia']) ? $_POST['setnia'] : '';
$paisnatal = isset($_POST['paisnatal']) ? $_POST['paisnatal'] : '';
$paisatual = isset($_POST['paisatual']) ? $_POST['paisatual'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

// endereço

$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$rua = isset($_POST['rua']) ? $_POST['rua'] : '';
$numerolote = isset($_POST['numerolote']) ? $_POST['numerolote'] : '';

switch ($Sgenero) {
    case '0':
        $genero = 'masculino';
        break;
    
    case '1':
        $genero = 'feminino';
        break;

    case '2':
        $genero = 'outro';
    break;
    
    default;
        
}

switch ($Setnia) {
    case '0':
        $etnia = 'branco';
        break;
    
    case '1':
        $etnia = 'negro';
        break;

    case '2':
        $etnia = 'pardo';
    break;

    case '3':
        $etnia = 'indigena';
    break;

    default;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o CPF já existe no banco de dados
    $selectcpf = "SELECT cpf FROM hospede WHERE cpf = '$cpf'";
    $querycpf = mysqli_query($conexao, $selectcpf);
    $dadocpf = mysqli_fetch_row($querycpf);

    if ($dadocpf == NULL) {
        // Insere os dados no banco de dados
        $inserthospede = "INSERT INTO hospede (nome, sobrenome, cpf, rg, data_nascimento, genero, etnia, pais_natal, pais_atual, email, telefone)
                           VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$datanascimento', '$genero', '$etnia', '$paisnatal', '$paisatual', '$email', '$telefone')";
        $queryhospede = mysqli_query($conexao, $inserthospede);

        $insertEndereco = "INSERT INTO endereco (cep, estado, cidade, bairro, rua, numero_lote, cpf)
                           VALUES ('$cep', '$estado', '$cidade', '$bairro', '$rua', '$numerolote', '$cpf')";
        $queryendereco = mysqli_query($conexao, $insertEndereco);    
        echo '<script>alert("Cadastro Realizado !");
            window.location="../Views/CadastroFisico.php";
            </script>';
    } else {
        echo '<script>alert("Cadastro já existe");
            window.location="../Views/CadastroFisico.php";
            </script>';
    }
}

?>