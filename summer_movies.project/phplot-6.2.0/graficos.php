<?php
// Inclua a biblioteca PHPlot
require_once 'phplot.php';
include('controllergraficos.php');

// Crie uma instância do PHPlot
$grafico = new PHPlot(800, 600);

// Defina o formato do arquivo de saída
$grafico->SetFileFormat('png');

// Defina o título do gráfico e os títulos dos eixos
$grafico->SetTitle('GRAFICO');
$grafico->SetXTitle('Eixo X');
$grafico->SetYTitle('Eixo Y');


// Defina os dados do gráfico

$dados = array(
    array(dadoCSVEixoX()[0], dadoCSVEixoY()[0]),
    array(dadoCSVEixoX()[1], dadoCSVEixoY()[1]),
    array(dadoCSVEixoX()[2], dadoCSVEixoY()[2]),
    array(dadoCSVEixoX()[3], dadoCSVEixoY()[3]),
    array(dadoCSVEixoX()[4], dadoCSVEixoY()[4]),
);

//$grafico->SetDataValues($dados);
$grafico->SetDataValues($dados);



// Defina o tipo de gráfico (barras)
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';

switch ($tipo) {
    case '0':
        $tp = 'bars';
        break;

    case '1':
        $tp = 'lines';
        break;

    case '2':
        $tp = 'linepoints';
        break;


    case '3':
        $tp = 'points';
        break;

    case '4':
        $tp = 'area';
        break;

    case '5':
        $tp = 'pie';
        break;

    case '6':
        $tp = 'stackedarea';
        break;

    case '7':
        $tp = 'stackedbars';
        break;

    case '8':
        $tp = 'thinbarline';
        break;

    default:

        break;
}
$grafico->SetPlotType($tp);

// Gere o gráfico
$grafico->DrawGraph();
