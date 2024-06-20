<?php 

$hospede =  isset($_POST['hospede']) ? $_POST['hospede'] : '';
if ($hospede == 0) { 
    header('location: tabelafisica.php');
        } elseif ($hospede == 1) { 
            header('location: tabelajuridica.php');
        } elseif ($hospede == 2) { 
            header('location: tabelareserva.php');
} 
     
?>
    