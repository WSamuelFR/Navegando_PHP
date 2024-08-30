<?php 

include('conexao.php');

// empresa

$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
$registroebt = isset($_POST['registroebt']) ? $_POST['registroebt'] : '';
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
$paiscede = isset($_POST['paiscede']) ? $_POST['paiscede'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

// endereço

$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$rua = isset($_POST['rua']) ? $_POST['rua'] : '';
$numerolote = isset($_POST['numerolote']) ? $_POST['numerolote'] : '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o CNPJ já existe no banco de dados
    $selectcnpj = "SELECT cnpj FROM empresa WHERE cnpj = '$cnpj'";
    $querycnpj = mysqli_query($conexao, $selectcnpj);
    $dadocnpj = mysqli_fetch_row($querycnpj);

    if ($dadocnpj == NULL) {
        // Insere os dados no banco de dados
        $insertempresa = "INSERT INTO empresa (nome, cnpj, registro_ebt, categoria, pais_cede, email, telefone, cep, estado, cidade, bairro, rua, numero_lote)
                           VALUES ('$empresa', '$cnpj', '$registroebt', '$categoria', '$paiscede', '$email', '$telefone', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numerolote')";
        $queryempresa = mysqli_query($conexao, $insertempresa);   
        echo '<script>alert("Cadastro Realizado !");
            window.location="../Views/CadastroCliente.php";
            </script>';
    } else {
        echo '<script>alert("Cadastro já existe");
            window.location="../Views/CadastroCliente.php";
            </script>';
    }
}

?>
