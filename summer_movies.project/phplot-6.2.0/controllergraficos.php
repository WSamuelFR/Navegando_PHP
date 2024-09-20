<?php

// função que envia os dados para gerar os graficos
function dadoCSVEixoX()
{
    $eixox = isset($_POST['eixox']) ? $_POST['eixox'] : '';

    switch ($eixox) {
        case '0':
            $ncoluna = 'title_type';
            break;

        case '1':
            $ncoluna = 'primary_title';
            break;

        case '2':
            $ncoluna = 'original_title';
            break;


        case '3':
            $ncoluna = 'genres';
            break;

        case '4':
            $ncoluna = 'simple_title';
            break;

        default:
            
            break;
    }
    // Abre o arquivo CSV
    $arquivo = fopen('summer_movies.csv', 'r');

    // Verifica se o arquivo foi aberto com sucesso
    if ($arquivo !== FALSE) {
        // pega o arquivo
        $cabecalho = fgetcsv($arquivo);
        // array recebe os dados do arquivo
        $linhas_desejadas = array();
        // define o numero de linhas 
        $numero_da_linha = 5;
        // define o numero de linhas
        $linha_atual = 0;
        // define o nome do cabeçalho
        $nome_coluna = $ncoluna;
        // buscar os dados de acordo com o cabeçalho
        $indice_coluna = array_search($nome_coluna, $cabecalho);

        // Lê o arquivo linha por linha / busca os arquivos na quantidade solicitada!
        while (($linha = fgetcsv($arquivo)) !== FALSE && $linha_atual < $numero_da_linha) {
            // verifica se os dados foram lidos
            if ($cabecalho !== FALSE) {
                // verifica se há dados dentro da variavel
                if (!empty($linha[$indice_coluna])) {
                    //recebe os dados e envia para o array    
                    $linhas_desejadas[] = $linha[$indice_coluna];
                    //incrementa mais dados
                    $linha_atual++;
                }
            }
        }

        //retorna os dados na funcão
        return ($linhas_desejadas);
        // Fecha o arquivo
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo.";
    }
}

// função que envia os dados para gerar os graficos
function dadoCSVEixoY()
{
    $eixoy = isset($_POST['eixoy']) ? $_POST['eixoy'] : '';

    switch ($eixoy) {
        case '0':
            $ncoluna = 'year';
            break;

        case '1':
            $ncoluna = 'runtime_minutes';
            break;

        case '2':
            $ncoluna = 'average_rating';
            break;

        default:
            
            break;
    }
    // Abre o arquivo CSV
    $arquivo = fopen('summer_movies.csv', 'r');

    // Verifica se o arquivo foi aberto com sucesso
    if ($arquivo !== FALSE) {
        // pega o arquivo
        $cabecalho = fgetcsv($arquivo);
        // array recebe os dados do arquivo
        $linhas_desejadas = array();
        // define o numero de linhas 
        $numero_da_linha = 5;
        // define o numero de linhas
        $linha_atual = 0;
        // define o nome do cabeçalho
        $nome_coluna = $ncoluna;
        // buscar os dados de acordo com o cabeçalho
        $indice_coluna = array_search($nome_coluna, $cabecalho);

        // Lê o arquivo linha por linha / busca os arquivos na quantidade solicitada!
        while (($linha = fgetcsv($arquivo)) !== FALSE && $linha_atual < $numero_da_linha) {
            // verifica se os dados foram lidos
            if ($cabecalho !== FALSE) {
                // verifica se há dados dentro da variavel
                if (!empty($linha[$indice_coluna])) {
                    //recebe os dados e envia para o array    
                    $linhas_desejadas[] = $linha[$indice_coluna];
                    //incrementa mais dados
                    $linha_atual++;
                }
            }
        }

        //retorna os dados na funcão
        return ($linhas_desejadas);
        // Fecha o arquivo
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo.";
    }
}
