<?php

$conexao = mysqli_connect('localhost', 'root', '', 'seguranca_manha', '3306');
if (!$conexao) {
    die('Não foi possível conectar');
}

?>