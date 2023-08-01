<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style04.css">
    <title>Desafio 04</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas v2.0</h1>
    <main>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["numero"] ?? 0;
            $dolar = $real / $cotação;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            
            echo "<p>Seus " .numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD")."</p>";
            echo "A cotação foi <strong>$cotação </strong><br><br>";  
            echo "Confira a cotação em tempo real em <br>"
        ?>
        <a href="https://www.bcb.gov.br/" target="_blank" rel="noopener";>https://www.bcb.gov.br/</a>
    </main>
    </header>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    
</body>
</html>