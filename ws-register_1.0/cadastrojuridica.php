<?php
include('conexao.php');

$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$rua = isset($_POST['rua']) ? $_POST['rua'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
$pais = isset($_POST['pais']) ? $_POST['pais'] : '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o CPF já existe no banco de dados
    $selectcnpj = "SELECT cnpj FROM juridica WHERE cnpj = '$cnpj'";
    $querycnpj = mysqli_query($conexao, $selectcnpj);
    $dadocnpj = mysqli_fetch_row($querycnpj);

    
    // Insere os dados no banco de dados
    if ($dadocnpj == NULL) {
        $insertjuridica = "INSERT INTO juridica (empresa, cnpj, email, telefone, rua, bairro, numero, cep, pais) VALUES ('$empresa', '$cnpj', '$email', '$telefone', '$rua', '$bairro', '$numero', '$cep', '$pais')";
        $queryjuridica = mysqli_query($conexao, $insertjuridica);
        echo '<script>alert("Cadastro realizado");
                window.location="tabelajuridica.php";
                </script>';
            
    }else {
        echo '<script>alert("cadastro já existe");
                window.location="tabelajuridica.php";
                </script>';       
    
    }
    
}
?>
