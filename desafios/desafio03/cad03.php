<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style03.css">
    <title>Desafio 03</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    <main>
        <?php 
        $cotação = 4.78;
        $real = $_GET["numero"] ?? 0;
        $dolar = $real / $cotação;
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " .numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD")."</p>";
        ?>
    </main>
    </header>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    
</body>
</html>