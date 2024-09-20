<?php

function dadosCSV() {

    // Inicializa a variável $row com 1 para contar as linhas
    $row = 1;

   // Tenta abrir o arquivo "teste.csv" no modo de leitura
  if (($handle = fopen("summer_movies.csv", "r")) !== FALSE) {
     // Enquanto houver linhas para ler no arquivo CSV
     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Conta o número de campos na linha atual
        $num = count($data);
        // Exibe o número de campos e o número da linha atual
        //echo "<p> $num campos na linha $row: <br /></p>\n";
        // Incrementa a variável $row para a próxima linha
        $row++;
        // Itera sobre cada campo na linha atual e exibe seu valor
        for ($c = 0; $c < $num; $c++) {
            return($data[$c]);
        }
    }
    // Fecha o arquivo após a leitura de todas as linhas
    fclose($handle);

    

}

}
    




?>