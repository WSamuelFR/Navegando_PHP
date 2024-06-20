<?php

include('conexao.php');

$named = isset($_POST['named']) ? $_POST['named'] : '';
$dia = isset($_POST['dia']) ? $_POST['dia'] : '';
$mes = isset($_POST['mes']) ? $_POST['mes'] : '';
$ano = isset($_POST['ano']) ? $_POST['ano'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
$apartamento = isset($_POST['apartamento']) ? $_POST['apartamento'] : '';
$pessoas = isset($_POST['pessoas']) ? $_POST['pessoas'] : '';
$valor = isset($_POST['valor']) ? $_POST['valor'] : '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectnamed = "SELECT named FROM reserva WHERE named = '$named'";
    $querynamed = mysqli_query($conexao, $selectnamed);
    $dadonamed = mysqli_fetch_row($querynamed);

   // Verifica se o CPF já existe no banco de dados
   if ($dadonamed == NULL) {
        // Insere os dados no banco de dados
        $insertreserva = "INSERT INTO reserva (named, dia, mes, ano, hora, apartamento, pessoas, valor) VALUES ('$named', '$dia', '$mes', '$ano', '$hora', '$apartamento', '$pessoas', '$valor')";
        $queryreserva = mysqli_query($conexao, $insertreserva);
        echo '<script>alert("Cadastro realizado");
        window.location="tabelareserva.php";
        </script>';
    
    }else {
        echo '<script>alert("Cadastro já existe");
        window.location="tabelareserva.php";
        </script>';      

    }

    
}

?>