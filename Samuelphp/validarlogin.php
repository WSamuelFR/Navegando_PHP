<?php

if(!isset($_SESSION)) {
    session_start();
}

if($_SESSION['logado'] == false) {
    header('location: index.php');
}

?>